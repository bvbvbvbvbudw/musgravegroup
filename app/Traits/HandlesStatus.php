<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait HandlesStatus
{
    /**
     * @param  mixed  $model
     * @param  string|null  $newStatus
     * @return void
     */
    public function handleStatus($model, $newStatus = null)
    {
        if ($newStatus) {
            $model->status = $newStatus;
        } else {
            if (Auth::user()->isAdmin()) {
                $model->status = 'approved';
            } else {
                $model->status = 'pending';
            }
        }
        $model->save();
    }
}
