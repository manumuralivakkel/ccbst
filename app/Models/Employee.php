<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class Employee extends Model
{
    use HasFactory;
    public static function add(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->type = $request->type;
        $employee->salary = self::salary($request);
        $employee->save();
        return $employee ?? null;
    }

    public static function salary(Request $request)
    {
        $salary = 0;
        switch ($request->type) {
            case 'Full Time':
            case 'Contract':
                $salary = $request->salary;
                break;
            case 'Part Time':
                $salary = $request->hsalary * $request->hours;
                break;
        }
        return $salary;
    }
}
