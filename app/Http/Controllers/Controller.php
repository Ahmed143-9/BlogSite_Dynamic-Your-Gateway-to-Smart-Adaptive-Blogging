<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Return a success JSON response
     *
     * @param mixed $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    protected function successResponse($data = null, string $message = 'Success', int $status = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    /**
     * Return an error JSON response
     *
     * @param string $message
     * @param int $status
     * @param mixed $errors
     * @return JsonResponse
     */
    protected function errorResponse(string $message = 'Error', int $status = 400, $errors = null): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors' => $errors
        ], $status);
    }

    /**
     * Return a view with common data
     *
     * @param string $view
     * @param array $data
     * @return View
     */
    protected function renderView(string $view, array $data = []): View
    {
        // Add common data that all views might need
        $commonData = [
            'app_name' => config('app.name'),
            'app_version' => config('app.version', '1.0.0'),
            'current_year' => date('Y'),
        ];

        return view($view, array_merge($commonData, $data));
    }

    /**
     * Redirect with success message
     *
     * @param string $route
     * @param string $message
     * @param array $parameters
     * @return RedirectResponse
     */
    protected function redirectWithSuccess(string $route, string $message = 'Operation completed successfully', array $parameters = []): RedirectResponse
    {
        return redirect()->route($route, $parameters)->with('success', $message);
    }

    /**
     * Redirect with error message
     *
     * @param string $route
     * @param string $message
     * @param array $parameters
     * @return RedirectResponse
     */
    protected function redirectWithError(string $route, string $message = 'An error occurred', array $parameters = []): RedirectResponse
    {
        return redirect()->route($route, $parameters)->with('error', $message);
    }

    /**
     * Log and handle exceptions
     *
     * @param \Exception $exception
     * @param string $context
     * @return void
     */
    protected function logException(\Exception $exception, string $context = 'Controller'): void
    {
        Log::error("Exception in {$context}: " . $exception->getMessage(), [
            'exception' => $exception,
            'trace' => $exception->getTraceAsString(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
        ]);
    }

    /**
     * Validate request data with custom messages
     *
     * @param \Illuminate\Http\Request $request
     * @param array $rules
     * @param array $messages
     * @return array
     */
    protected function validateRequest($request, array $rules, array $messages = []): array
    {
        return $request->validate($rules, $messages);
    }

    /**
     * Check if request is AJAX
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function isAjax($request): bool
    {
        return $request->ajax() || $request->wantsJson();
    }

    /**
     * Return appropriate response based on request type
     *
     * @param \Illuminate\Http\Request $request
     * @param mixed $data
     * @param string $view
     * @param string $message
     * @return JsonResponse|View
     */
    protected function responseBasedOnRequest($request, $data, string $view, string $message = 'Success')
    {
        if ($this->isAjax($request)) {
            return $this->successResponse($data, $message);
        }

        return $this->renderView($view, is_array($data) ? $data : compact('data'));
    }

    /**
     * Handle pagination for data
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    protected function paginateData($query, int $perPage = 15)
    {
        return $query->paginate($perPage);
    }

    /**
     * Get authenticated user
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    protected function getAuthUser()
    {
        return auth()->user();
    }

    /**
     * Check if user is authenticated
     *
     * @return bool
     */
    protected function isAuthenticated(): bool
    {
        return auth()->check();
    }
}