<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $permission = [
        [
          'name' => 'admin-access',
          'display_name' => 'Acesso Administrador',
          'description' => 'See only Listing Of Role'
        ],
        [
          'name' => 'secre-access',
          'display_name' => 'Acesso da Secretária',
          'description' => 'See only Listing Of Role'
        ],
        [
          'name' => 'fisio-access',
          'display_name' => 'Acesso Fisíoterapeuta',
          'description' => 'See only Listing Of Role'
        ],
        [
          'name' => 'admin-access',
          'display_name' => 'Acesso admin',
          'description' => 'See only Listing Of Role'
        ],
        [
          'name' => 'role-list',
          'display_name' => 'Ver regras',
          'description' => 'See only Listing Of Role'
        ],
        [
          'name' => 'role-create',
          'display_name' => 'Criar regra',
          'description' => 'Create New Role'
        ],
        [
          'name' => 'role-edit',
          'display_name' => 'Editar regra',
          'description' => 'Edit Role'
        ],
        [
          'name' => 'role-delete',
          'display_name' => 'Deletar regra',
          'description' => 'Delete Role'
        ],
        [
          'name' => 'procedures-list',
          'display_name' => 'Ver procedimentos',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'procedures-create',
          'display_name' => 'Criar procedimento',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'procedures-edit',
          'display_name' => 'Editar procedimento',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'procedures-delete',
          'display_name' => 'Deletar procedimento',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'patients-list',
          'display_name' => 'Ver pacientes',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'patients-create',
          'display_name' => 'Criar paciente',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'patients-edit',
          'display_name' => 'Editar paciente',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'patients-delete',
          'display_name' => 'Deletar paciente',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'professionals-list',
          'display_name' => 'Ver profissinais',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'professionals-create',
          'display_name' => 'Criar profissinal',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'professionals-edit',
          'display_name' => 'Editar profissinal',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'professionals-delete',
          'display_name' => 'Deletar profissinal',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'schedules-list',
          'display_name' => 'Ver agendamentos',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'schedules-all',
          'display_name' => 'Todos os agendamentos',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'schedules-create',
          'display_name' => 'Criar agendamento',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'schedules-edit',
          'display_name' => 'Editar agendamento',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'schedules-delete',
          'display_name' => 'Deletar agendamento',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'medicalrecords-list',
          'display_name' => 'Ver sessões marcadas',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'medicalrecords-create',
          'display_name' => 'Marcar sessões',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'medicalrecords-edit',
          'display_name' => 'Editar sessões marcadas',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'medicalrecords-delete',
          'display_name' => 'Deletar sessões marcadas',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'session-create',
          'display_name' => 'Realizar sessão',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'session-find',
          'display_name' => 'Buscar sessões',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'session-delete',
          'display_name' => 'Deletar sessões',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'medicalappointments-list',
          'display_name' => 'Ver consultas',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'medicalappointments-create',
          'display_name' => 'Criar consulta',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'medicalappointments-edit',
          'display_name' => 'Editar consulta',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'medicalappointments-delete',
          'display_name' => 'Deletar consulta',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'users-list',
          'display_name' => 'Ver usuários',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'users-create',
          'display_name' => 'Criar usuário',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'users-edit',
          'display_name' => 'Editar usuário',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'users-delete',
          'display_name' => 'Deletar usuário',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'postural-list',
          'display_name' => 'Ver avaliação postural',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'postural-create',
          'display_name' => 'Criar avaliação postural',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'postural-edit',
          'display_name' => 'Editar avaliação postural',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'postural-delete',
          'display_name' => 'Deletar avaliação postural',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'postural-pdf',
          'display_name' => 'imprimir avaliação postural',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'neurological-list',
          'display_name' => 'Ver avaliação neurológica',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'neurological-create',
          'display_name' => 'Criar avaliação neurológica',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'neurological-edit',
          'display_name' => 'Editar avaliação neurológica',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'neurological-delete',
          'display_name' => 'Deletar avaliação neurológica',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'neurological-pdf',
          'display_name' => 'Imprimir avaliação neurológica',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'reports-list',
          'display_name' => 'Ver relatórios',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'typeprocedures-list',
          'display_name' => 'Ver tipos de procedimentos',
          'description' => 'See only Listing Of Item'
        ],
        [
          'name' => 'typeprocedures-create',
          'display_name' => 'Criar tipo de procedimento',
          'description' => 'Create New Item'
        ],
        [
          'name' => 'typeprocedures-edit',
          'display_name' => 'Editar tipo de procedimento',
          'description' => 'Edit Item'
        ],
        [
          'name' => 'typeprocedures-delete',
          'display_name' => 'Deletar tipo de procedimento',
          'description' => 'Delete Item'
        ],
        [
          'name' => 'procedure-pdf',
          'display_name' => 'Imprimir procedimento',
          'description' => 'Imprime procedimento'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
    }
}
