<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name'=> 'Admin']);
        
       $role2 = Role::create(['name'=> 'Blogger']);
        
       Permission::create(['name'=> 'adminlte3','description'=> 'Ver Blog'])->syncRoles([$role1,$role2]);
    
       Permission::create(['name'=> 'adminlte3.users.index','description'=> 'Ver Listado de Usuarios'])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.users.create','description'=> 'Asignar un rol'])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.users.update','description'=> 'Actualizar un rol'])->syncRoles([$role1]);

       Permission::create(['name'=> 'adminlte3.categories.index','description'=> 'Ver listado de Categorias'])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.categories.create','description'=> 'Crear Categoria'])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.categories.edit','description'=> 'Editar Caegoria'])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.categories.destroy','description'=> 'Eliminar Categoria'])->syncRoles([$role1]);
    
       Permission::create(['name'=> 'adminlte3.tags.index','description'=> 'Ver Listado de Etiquetas'])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.tags.create','description'=> 'Crear Etiquetas'])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.tags.edit','description'=> 'Editar Etiquetas '])->syncRoles([$role1]);
       Permission::create(['name'=> 'adminlte3.tags.destroy','description'=> 'Eliminar Etiquetas'])->syncRoles([$role1]);
        
       Permission::create(['name'=> 'adminlte3.posts.index','description'=> 'Ver Listado de'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=> 'adminlte3.posts.create','description'=> 'Crear Posts'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=> 'adminlte3.posts.edit','description'=> 'Editar Posts'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=> 'adminlte3.posts.destroy','description'=> 'Eliminar Posts'])->syncRoles([$role1,$role2]);
    }
}
