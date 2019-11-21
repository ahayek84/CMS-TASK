
<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $role_student = Role::where('name', 'student')->first();
        $role_employee = Role::where('name', 'employee')->first();
        $role_employer = Role::where('name', 'employer')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $admin = new User();
        $admin->name = 'Abed Admin';
        $admin->email = 'AbedA@mytest.com';
        $admin->password = Hash::make('abeda');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $employee = new User();
        $employee->name = 'Abed Employee';
        $employee->email = 'AbedE@mytest.com';
        $employee->password = Hash::make('Abede');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $student = new User();
        $student->name = 'Abed Student';
        $student->email = 'abeds@mytest.com';
        $student->password = Hash::make('abeds');
        $student->save();
        $student->roles()->attach($role_student);

        
        $employer = new User();
        $employer->name = 'Abed Employer';
        $employer->email = 'AbedER@mytest.com';
        $employer->password = Hash::make('abeder');
        $employer->save();
        $employer->roles()->attach($role_employer);

    }
}