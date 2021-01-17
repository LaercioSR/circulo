<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

define('WEIGHT_PORTUGUESE', 5);
define('WEIGHT_MATH', 5);
define('WEIGHT_HISTORY', 4);
define('WEIGHT_GEOGRAPHY', 2);
define('WEIGHT_CHEMISTRY', 3);
define('WEIGHT_PHYSICS', 3);
define('WEIGHT_BIOLOGY', 3);
define('WEIGHT_PHILOSOPHY', 1);
define('WEIGHT_SOCIOLOGY', 1);

class Grade extends Model
{
    use HasFactory;

    public function calculateScore() {
        $total_weight = $this->totalWeight();

        // total_subject = grade * attendance(%) / 100 * weight
        $total_portuguese = $this->grade_portuguese * $this->attendance_portuguese / 100 * WEIGHT_PORTUGUESE;
        $total_math = $this->grade_math * $this->attendance_math / 100 * WEIGHT_MATH;
        $total_history = $this->grade_history * $this->attendance_history / 100 * WEIGHT_HISTORY;
        $total_geography = $this->grade_geography * $this->attendance_geography / 100 * WEIGHT_GEOGRAPHY;
        $total_chemistry = $this->grade_chemistry * $this->attendance_chemistry / 100 * WEIGHT_CHEMISTRY;
        $total_physics = $this->grade_physics * $this->attendance_physics / 100 * WEIGHT_PHYSICS;
        $total_biology = $this->grade_biology * $this->attendance_biology / 100 * WEIGHT_BIOLOGY;
        $total_philosophy = $this->grade_philosophy * $this->attendance_philosophy / 100 * WEIGHT_PHILOSOPHY;
        $total_sociology = $this->grade_sociology * $this->attendance_sociology / 100 * WEIGHT_SOCIOLOGY;

        $total = $total_portuguese +
            $total_math +
            $total_history +
            $total_geography +
            $total_chemistry +
            $total_physics +
            $total_biology +
            $total_philosophy +
            $total_sociology;

        return $total / $total_weight * 10;
    }

    private function totalWeight() {
        return WEIGHT_PORTUGUESE +
            WEIGHT_MATH +
            WEIGHT_HISTORY +
            WEIGHT_GEOGRAPHY +
            WEIGHT_CHEMISTRY +
            WEIGHT_PHYSICS +
            WEIGHT_BIOLOGY +
            WEIGHT_PHILOSOPHY +
            WEIGHT_SOCIOLOGY;
    }
}
