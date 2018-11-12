<?php

namespace Wrogati\UserSeed\Controllers;

use App\Http\Controllers\Controller;
use DB;

class UserSeedController extends Controller
{
    public function seeder($op)
    {
        
        switch ($op) {
            case 'pt':
            $data = array(
                ['name' => 'Alan','email' => 'alan@email.com','password' => bcrypt(123456)],
                ['name' => 'Alexandre','email' => 'alexandre@email.com','password' => bcrypt(123456)],
                ['name' => 'Bruno','email' => 'bruno@email.com','password' => bcrypt(123456)],
                ['name' => 'Camila','email' => 'camila@email.com','password' => bcrypt(123456)],
                ['name' => 'Carlos','email' => 'carlos@email.com','password' => bcrypt(123456)],
                ['name' => 'Clarice','email' => 'clarice@email.com','password' => bcrypt(123456)],
                ['name' => 'Daniel','email' => 'daniel@email.com','password' => bcrypt(123456)],
                ['name' => 'Denise','email' => 'denise@email.com','password' => bcrypt(123456)],
                ['name' => 'Diana','email' => 'diana@email.com','password' => bcrypt(123456)],
                ['name' => 'Edson','email' => 'edson@email.com','password' => bcrypt(123456)],
                ['name' => 'Fernando','email' => 'fernando@email.com','password' => bcrypt(123456)],
                ['name' => 'Felipe','email' => 'felipe@email.com','password' => bcrypt(123456)],
                ['name' => 'Gabriel','email' => 'gabriel@email.com','password' => bcrypt(123456)],
                ['name' => 'Ivan','email' => 'ivan@email.com','password' => bcrypt(123456)],
                ['name' => 'Jair','email' => 'jair@email.com','password' => bcrypt(123456)],
                ['name' => 'Joao','email' => 'joao@email.com','password' => bcrypt(123456)],
                ['name' => 'Juliana','email' => 'juliana@email.com','password' => bcrypt(123456)],
                ['name' => 'Lucas','email' => 'lucas@email.com','password' => bcrypt(123456)],
                ['name' => 'Leandro','email' => 'leandro@email.com','password' => bcrypt(123456)],
                ['name' => 'Maria','email' => 'maria@email.com','password' => bcrypt(123456)],
                ['name' => 'Mario','email' => 'mario@email.com','password' => bcrypt(123456)],
                ['name' => 'Marcelo','email' => 'marcelo@email.com','password' => bcrypt(123456)],
                ['name' => 'Miriam','email' => 'miriam@email.com','password' => bcrypt(123456)],
                ['name' => 'Natan','email' => 'natan@email.com','password' => bcrypt(123456)],
                ['name' => 'Osvaldo','email' => 'osvaldo@email.com','password' => bcrypt(123456)],
                ['name' => 'Osmar','email' => 'osmar@email.com','password' => bcrypt(123456)],
                ['name' => 'Pedro','email' => 'pedro@email.com','password' => bcrypt(123456)],
                ['name' => 'Ricardo','email' => 'ricardo@email.com','password' => bcrypt(123456)],
                ['name' => 'Rafael','email' => 'rafael@email.com','password' => bcrypt(123456)],
                ['name' => 'Ronaldo','email' => 'ronaldo@email.com','password' => bcrypt(123456)],
                ['name' => 'Rodrigo','email' => 'rodrigo@email.com','password' => bcrypt(123456)],
                ['name' => 'Rogerio','email' => 'rogerio@email.com','password' => bcrypt(123456)],
                ['name' => 'Sara','email' => 'sara@email.com','password' => bcrypt(123456)],
                ['name' => 'Samuel','email' => 'samuel@email.com','password' => bcrypt(123456)],
                ['name' => 'Teófilo','email' => 'teofilo@email.com','password' => bcrypt(123456)],
                ['name' => 'Valdir','email' => 'valdir@email.com','password' => bcrypt(123456)]
                );
                break;
            case 'us':
            $data = array(
                ['name' => 'Austin','email' => 'austin@email.com','password' => bcrypt(123456)],
                ['name' => 'Alex','email' => 'alex@email.com','password' => bcrypt(123456)],
                ['name' => 'Andrew','email' => 'andrew@email.com','password' => bcrypt(123456)],
                ['name' => 'Ashley','email' => 'ashley@email.com','password' => bcrypt(123456)],
                ['name' => 'Angelina','email' => 'angelina@email.com','password' => bcrypt(123456)],
                ['name' => 'Bob','email' => 'bob@email.com','password' => bcrypt(123456)],
                ['name' => 'Brad','email' => 'brad@email.com','password' => bcrypt(123456)],
                ['name' => 'Brunce','email' => 'brunce@email.com','password' => bcrypt(123456)],
                ['name' => 'Brittany','email' => 'brittany@email.com','password' => bcrypt(123456)],
                ['name' => 'David','email' => 'david@email.com','password' => bcrypt(123456)],
                ['name' => 'Dylan','email' => 'dylan@email.com','password' => bcrypt(123456)],
                ['name' => 'Franklyn','email' => 'franklyn@email.com','password' => bcrypt(123456)],
                ['name' => 'Francine','email' => 'farncine@email.com','password' => bcrypt(123456)],
                ['name' => 'Hilary','email' => 'hilary@email.com','password' => bcrypt(123456)],
                ['name' => 'James','email' => 'james@email.com','password' => bcrypt(123456)],
                ['name' => 'John','email' => 'john@email.com','password' => bcrypt(123456)],
                ['name' => 'Joseph','email' => 'joseph@email.com','password' => bcrypt(123456)],
                ['name' => 'Jimmy','email' => 'jimmy@email.com','password' => bcrypt(123456)],
                ['name' => 'Jackson','email' => 'jackson@email.com','password' => bcrypt(123456)],
                ['name' => 'Katherine','email' => 'katherine@email.com','password' => bcrypt(123456)],
                ['name' => 'Luke','email' => 'luke@email.com','password' => bcrypt(123456)],
                ['name' => 'Lisa','email' => 'lisa@email.com','password' => bcrypt(123456)],
                ['name' => 'Lucy','email' => 'lucy@email.com','password' => bcrypt(123456)],
                ['name' => 'Mark','email' => 'mark@email.com','password' => bcrypt(123456)],
                ['name' => 'Mathew','email' => 'mathew@email.com','password' => bcrypt(123456)],
                ['name' => 'Max','email' => 'max@email.com','password' => bcrypt(123456)],
                ['name' => 'Michael','email' => 'michael@email.com','password' => bcrypt(123456)],
                ['name' => 'Michelle','email' => 'Michelle@email.com','password' => bcrypt(123456)],
                ['name' => 'Nicole','email' => 'nicole@email.com','password' => bcrypt(123456)],
                ['name' => 'Noah','email' => 'noah@email.com','password' => bcrypt(123456)],
                ['name' => 'Oscar','email' => 'oscar@email.com','password' => bcrypt(123456)],
                ['name' => 'Oliver','email' => 'oliver@email.com','password' => bcrypt(123456)],
                ['name' => 'Peter','email' => 'peter@email.com','password' => bcrypt(123456)],
                ['name' => 'Pennelope','email' => 'pennelope@email.com','password' => bcrypt(123456)],
                ['name' => 'Robbin','email' => 'robbin@email.com','password' => bcrypt(123456)],
                ['name' => 'Sthephany','email' => 'sthephany@email.com','password' => bcrypt(123456)],
                ['name' => 'Sarah','email' => 'sarah@email.com','password' => bcrypt(123456)],
                ['name' => 'Sharon','email' => 'sharon@email.com','password' => bcrypt(123456)],
                ['name' => 'Spike','email' => 'spike@email.com','password' => bcrypt(123456)],
                ['name' => 'Thomas','email' => 'thomas@email.com','password' => bcrypt(123456)],
                ['name' => 'Washington','email' => 'washington@email.com','password' => bcrypt(123456)],
                ['name' => 'Wellington','email' => 'wellington@email.com','password' => bcrypt(123456)],
                ['name' => 'Willian','email' => 'willian@email.com','password' => bcrypt(123456)]
                );
                break;

            default:
                # code...
                break;
        }

        $this->run($data);
    }

    private function run($data)
    {
        for ($i=0; $i < count($data); $i++) { 
            DB::table('users')->insert($data[$i]);
        }
    }
}

