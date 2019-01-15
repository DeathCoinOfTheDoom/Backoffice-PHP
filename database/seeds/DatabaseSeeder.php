<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('UserTableSeeder');
        $this->call('UserInfoTableSeeder');
        $this->call('AddressTableSeeder');
        $this->call('FolderCategorieTableSeeder');
        $this->call('FileTypeTableSeeder');
    }
}

class UserTableSeeder extends Seeder {
    public function run()
    {
      DB::table('users')->delete();

      DB::table('users')->insert([
          'email' => 'axel.rayer@gmail.com',
          'password' => bcrypt('pm13080437'),
          'admin' => 1,
          'phone_number' => '+33651520836'
      ]);
    }
  }

  class UserInfoTableSeeder extends Seeder {
    public function run()
    {
      DB::table('user_info')->delete();

      DB::table('user_info')->insert([
          'user_id' => 1,
          'lastName' => 'Rayer',
          'firstName' => 'Axel',
          'birthdate' => '30/05/1997'
        ]);
    }
  }

  class AddressTableSeeder extends Seeder {
    public function run()
    {
      DB::table('address')->delete();

      DB::table('address')->insert([
          'user_id' => 1,
          'address' => '12 Rue Guynemer',
          'postal_code' => '77540',
          'city' => 'Montry',
          'country' => 'France'
        ]);
    }
  }

  class FolderCategorieTableSeeder extends Seeder {
    public function run()
    {
      DB::table('folders_categories')->delete();

      DB::table('folders_categories')->insert([
        'id' => 1,
        'name' => 'Identité'
      ]);

      DB::table('folders_categories')->insert([
        'id' => 2,
        'name' => 'Domicile'
      ]);

      DB::table('folders_categories')->insert([
        'id' => 3,
        'name' => 'Emploi'
      ]);

      DB::table('folders_categories')->insert([
        'id' => 4,
        'name' => 'Garant'
      ]);

      DB::table('folders_categories')->insert([
        'id' => 5,
        'name' => 'Supplémentaire'
      ]);
    }
  }


  class FileTypeTableSeeder extends Seeder {
    public function run()
    {
      DB::table('files_types')->delete();

      DB::table('files_types')->insert([
          'name' => 'Carte identité',
          'foldercategorie_id' => 1
      ]);

      DB::table('files_types')->insert([
        'name' => 'Passeport',
        'foldercategorie_id' => 1
      ]);

    DB::table('files_types')->insert([
      'name' => 'Permis de conduire',
      'foldercategorie_id' => 1
    ]);

    DB::table('files_types')->insert([
      'name' => 'Facture EDF',
      'foldercategorie_id' => 2
    ]);

    DB::table('files_types')->insert([
      'name' => 'Facture téléphonique',
      'foldercategorie_id' => 2
    ]);

    DB::table('files_types')->insert([
      'name' => 'Attestation hébergement',
      'foldercategorie_id' => 2
    ]);


    DB::table('files_types')->insert([
      'name' => 'Contrat de travail',
      'foldercategorie_id' => 3
    ]);

    DB::table('files_types')->insert([
      'name' => 'Avis impositions',
      'foldercategorie_id' => 3
    ]);

    DB::table('files_types')->insert([
      'name' => 'Bultin de salaire 1',
      'foldercategorie_id' => 3
    ]);

    DB::table('files_types')->insert([
      'name' => 'Bultin de salaire 2',
      'foldercategorie_id' => 3
    ]);

    DB::table('files_types')->insert([
      'name' => 'Bultin de salaire 3',
      'foldercategorie_id' => 3
    ]);


    DB::table('files_types')->insert([
      'name' => 'Carte identité',
      'foldercategorie_id' => 4
    ]);

    DB::table('files_types')->insert([
      'name' => 'Extrait de KBIS',
      'foldercategorie_id' => 4
    ]);

    DB::table('files_types')->insert([
      'name' => 'Taxe foncière',
      'foldercategorie_id' => 4
    ]);

    DB::table('files_types')->insert([
      'name' => 'Carte étudiante',
      'foldercategorie_id' => 5
    ]);
    }
  }
