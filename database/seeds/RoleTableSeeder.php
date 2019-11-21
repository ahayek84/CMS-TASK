
<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $student = new Role();
        $student->name = 'student role';
        $student->description = 'A student role';
        $student->save();
        
        $employee = new Role();
        $employee->name = 'employee role';
        $employee->description = 'employee';
        $employee->save();

        $employee = new Role();
        $employee->name = 'employer role';
        $employee->description = 'employer';
        $employee->save();

        $admin = new Role();
        $admin->name = 'admin role';
        $admin->description = 'administrator';
        $admin->save();
    }
}