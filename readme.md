# Ping CRM

A demo application to illustrate how Inertia.js works.

![](https://raw.githubusercontent.com/inertiajs/pingcrm/master/screenshot.png)

## Installation

Clone the repo locally:

```sh
git clone https://github.com/inertiajs/pingcrm.git pingcrm
cd pingcrm
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm ci
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit Ping CRM in your browser, and login with:

- **Username:** johndoe@example.com
- **Password:** secret

## Running tests

To run the Ping CRM tests, run:

```
phpunit
```


C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLA\pingcrm>php artisan tinker
PHP Warning:  PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0

Warning: PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0
Psy Shell v0.11.9 (PHP 8.1.11 — cli) by Justin Hileman
> use App\Models\Relacionamento;                                               
> $rel = Relacionamento::find(1);                                              
= null

> quit                                                                         

   INFO  Goodbye.


C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLA\pingcrm>php artisan tinker
PHP Warning:  PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0

Warning: PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0
Psy Shell v0.11.9 (PHP 8.1.11 — cli) by Justin Hileman
> Relacionamento::all()                                                        

   ERROR  Class "Relacionamento" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> use App\Models;                                                              
> Relacionamento::all()                                                        

   ERROR  Class "Relacionamento" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> use App\Models\Relacionameto                                                 
> Relacionamento::all()                                                        

   ERROR  Class "Relacionamento" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $res = Relacionamento::all()                                                 

   ERROR  Class "Relacionamento" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $res->all()                                                                  

   WARNING  Undefined variable $res in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.


   ERROR  Call to a member function all() on null in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $res->find(1)                                                                

   WARNING  Undefined variable $res in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.


   ERROR  Call to a member function find() on null in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $res->find(1);                                                               

   WARNING  Undefined variable $res in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.


   ERROR  Call to a member function find() on null in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $variavel = Relacionamento::find(1)                                          

   ERROR  Class "Relacionamento" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $variavel = Testando::find(1)                                                

   ERROR  Class "Testando" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> use App\Models\Testando;                                                     
> $res = Testando::find(1)                                                     
= null

> $res->all()                                                                  

   ERROR  Call to a member function all() on null in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> use App\Models\Testando;                                                     
> $rel = Testando(2)                                                           

   ERROR  Call to undefined function App\Models\Testando() in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $rel = Testando(2);                                                          

   ERROR  Call to undefined function App\Models\Testando() in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $rel = Testando::all();                                                      
= Illuminate\Database\Eloquent\Collection {#3600
    all: [
      App\Models\Testando {#3622
        id: 2,
        string: "String",
        integer: 25,
        decimal: "5.50",
        boolean: 0,
        enum: "opcao_2",
        created_at: "2022-11-24 09:06:12",
        updated_at: null,
      },
    ],
  }

> $variavel->testando;                                                         

   WARNING  Undefined variable $variavel in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.


   WARNING  Attempt to read property "testando" on null in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

= null

> use App\Models\Relacionamento                                                
> $rel = Relacionamento::all();                                                
= Illuminate\Database\Eloquent\Collection {#3609
    all: [
      App\Models\Relacionamento {#3631
        id: 2,
        nome: "Relacionamento primeiro",
        id_testando: 2,
        created_at: "2022-11-24 09:09:57",
        updated_at: null,
      },
    ],
  }

> $rel->testando                                                               

   Exception  Property [testando] does not exist on this collection instance.  

> $rel->testando;                                                              

   Exception  Property [testando] does not exist on this collection instance.  

> use App\Models\Testando;                                                     
> $rel->testando;                                                              

   Exception  Property [testando] does not exist on this collection instance.  

> exit                                                                         

   INFO  Goodbye.


C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLA\pingcrm>php ar
tisan tinker
PHP Warning:  PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0

Warning: PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0
Psy Shell v0.11.9 (PHP 8.1.11 — cli) by Justin Hileman
> use Relacionamento                                                           
> $x = Relacionamento::find(1);                                                

   ERROR  Class "Relacionamento" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> use App\Models\Relacionamento;                                               
> $x = Relacionamento::find(1);                                                
= null

> $x = Relacionamento::find(2);                                                
= App\Models\Relacionamento {#3618
    id: 2,
    nome: "Relacionamento primeiro",
    id_testando: 2,
    created_at: "2022-11-24 09:09:57",
    updated_at: null,
  }

> $x = Relacionamento::find(3);                                                
= null

> $y = Testando::find(3);                                                      

   ERROR  Class "Testando" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> use App\Models\Testando::class;                                              

   PARSE ERROR  PHP Parse error: Syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM, expecting ';' in vendor\psy\psysh\src\Exception\ParseErrorException.php on line 40.

> use App\Models\Testando                                                      
> $y = Testando::find(1)                                                       
= null

> $y = Testando::find(2)                                                       
= App\Models\Testando {#3610
    id: 2,
    string: "String",
    integer: 25,
    decimal: "5.50",
    boolean: 1,
    enum: "opcao_1",
    created_at: "2022-11-24 09:06:06",
    updated_at: null,
  }

> $y = Testando::find(3)                                                       
= App\Models\Testando {#3612
    id: 3,
    string: "Nova String",
    integer: 52,
    decimal: "4.50",
    boolean: 0,
    enum: "opcao_2",
    created_at: "2022-11-24 09:06:12",
    updated_at: null,
  }

> $y = Testando::all()                                                         
= Illuminate\Database\Eloquent\Collection {#3602
    all: [
      App\Models\Testando {#3613
        id: 2,
        string: "String",
        integer: 25,
        decimal: "5.50",
        boolean: 1,
        enum: "opcao_1",
        created_at: "2022-11-24 09:06:06",
        updated_at: null,
      },
      App\Models\Testando {#3627
        id: 3,
        string: "Nova String",
        integer: 52,
        decimal: "4.50",
        boolean: 0,
        enum: "opcao_2",
        created_at: "2022-11-24 09:06:12",
        updated_at: null,
      },
    ],
  }

> $x = Relacionamento::find(2);                                                
= App\Models\Relacionamento {#3623
    id: 2,
    nome: "Relacionamento primeiro",
    id_testando: 2,
    created_at: "2022-11-24 09:09:57",
    updated_at: null,
  }

> $y = Testando::all()                                                         
= Illuminate\Database\Eloquent\Collection {#3633
    all: [
      App\Models\Testando {#3634
        id: 2,
        string: "String",
        integer: 25,
        decimal: "5.50",
        boolean: 1,
        enum: "opcao_1",
        created_at: "2022-11-24 09:06:06",
        updated_at: null,
      },
      App\Models\Testando {#3635
        id: 3,
        string: "Nova String",
        integer: 52,
        decimal: "4.50",
        boolean: 0,
        enum: "opcao_2",
        created_at: "2022-11-24 09:06:12",
        updated_at: null,
      },
    ],
  }

> $x->Testando                                                                 
= App\Models\Testando {#3622
    id: 2,
    string: "String",
    integer: 25,
    decimal: "5.50",
    boolean: 1,
    enum: "opcao_1",
    created_at: "2022-11-24 09:06:06",
    updated_at: null,
  }

> $x                                                                           
= App\Models\Relacionamento {#3623
    id: 2,
    nome: "Relacionamento primeiro",
    id_testando: 2,
    created_at: "2022-11-24 09:09:57",
    updated_at: null,
    Testando: App\Models\Testando {#3622
      id: 2,
      string: "String",
      integer: 25,
      decimal: "5.50",
      boolean: 1,
      enum: "opcao_1",
      created_at: "2022-11-24 09:06:06",
      updated_at: null,
    },
  }

> $y->Relacionamento                                                           

   Exception  Property [Relacionamento] does not exist on this collection instance.

> $x->Testando                                                                 
= App\Models\Testando {#3622
    id: 2,
    string: "String",
    integer: 25,
    decimal: "5.50",
    boolean: 1,
    enum: "opcao_1",
    created_at: "2022-11-24 09:06:06",
    updated_at: null,
  }

> $x->all()                                                                    
= Illuminate\Database\Eloquent\Collection {#3636
    all: [
      App\Models\Relacionamento {#3613
        id: 2,
      decimal: "5.50",
      boolean: 1,
      enum: "opcao_1",
      created_at: "2022-11-24 09:06:06",
      updated_at: null,
    },
    App\Models\Testando {#3635
      id: 3,
      string: "Nova String",
      integer: 52,
      decimal: "4.50",
      boolean: 0,
      enum: "opcao_2",
      created_at: "2022-11-24 09:06:12",
      updated_at: null,
    },
  ]

> $x->$y                                                                       
= null

> $y->$x                                                                       

   Exception  Property [{"id":2,"nome":"Relacionamento primeiro","id_testando":2,"created_at":"2022-11-24T09:09:57.000000Z","updated_at":null,"testando":{"id":2,"string":"String","integer":25,"decimal":"5.50","boolean":1,"enum":"opcao_1","created_at":"2022-11-24T09:06:06.000000Z","updated_at":null}}] does not exist on this collection instance.

> $x->Testando                                                                 
= App\Models\Testando {#3622
    id: 2,
    string: "String",
    integer: 25,
    decimal: "5.50",
    boolean: 1,
    enum: "opcao_1",
    created_at: "2022-11-24 09:06:06",
    updated_at: null,
  }

> $x::with('testando')->find(all)                                              

   ERROR  Undefined constant "all" in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> Relacionamento::with('testando')->find(all)                                  

   ERROR  Undefined constant "all" in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> Relacionamento::with('testando')->find(1)                                    
= null

>                                                                              
> Relacionamento::with('testando')->find(2)                                    
= App\Models\Relacionamento {#3651
    id: 2,
    nome: "Relacionamento primeiro",
    id_testando: 2,
    created_at: "2022-11-24 09:09:57",
    updated_at: null,
    testando: App\Models\Testando {#3660
      id: 2,
      string: "String",
      integer: 25,
      decimal: "5.50",
      boolean: 1,
      enum: "opcao_1",
      created_at: "2022-11-24 09:06:06",
      updated_at: null,
    },
  }

> Relacionamento::with('testando')->all()                                      

   BadMethodCallException  Call to undefined method Illuminate\Database\Eloquent\Builder::all().

> Relacionamento::with('testando')                                             
= Illuminate\Database\Eloquent\Builder {#3991}

> $z = Relacionamento::with('testando')                                        
= Illuminate\Database\Eloquent\Builder {#3645}

> $z->find(all)                                                                

   ERROR  Undefined constant "all" in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $z->all()                                                                    

   BadMethodCallException  Call to undefined method Illuminate\Database\Eloquent\Builder::all().

> $z                                                                           
= Illuminate\Database\Eloquent\Builder {#3645}

> $z::all()                                                                    

   BadMethodCallException  Call to undefined method Illuminate\Database\Eloquent\Builder::all().

> $x::all()
= Illuminate\Database\Eloquent\Collection {#3647
    all: [
      App\Models\Relacionamento {#3660
        id: 2,
        nome: "Relacionamento primeiro",
        id_testando: 2,
        created_at: "2022-11-24 09:09:57",
        updated_at: null,
      },
    ],
  }

> $y::all()

   ERROR  Non-static method Illuminate\Support\Collection::all() cannot be called statically in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> $z::all()

   BadMethodCallException  Call to undefined method Illuminate\Database\Eloquent\Builder::all().


   ERROR  Non-static method Illuminate\Support\Collection::all() cannot be called statically in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

>                                                                              

>                                                                              
> use App\Models\Testando;                                                     
> $t = Testando::find(2)                                                       
= App\Models\Testando {#3602
    id: 2,
    string: "String",
    integer: 25,
    decimal: "5.50",
    boolean: 1,
    enum: "opcao_1",
    created_at: "2022-11-24 09:06:06",
    updated_at: null,
  }

> $t->relacionamento                                                           
= null

> $t->relacionamento                                                           
= null

> exit                                                                         

   INFO  Goodbye.


C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLA\pingcrm>php artisan tinker
PHP Warning:  PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0

Warning: PHP Startup: gd: Unable to initialize module
Module compiled with module API=20190902
PHP    compiled with module API=20210902
These options need to match
 in Unknown on line 0
Psy Shell v0.11.9 (PHP 8.1.11 — cli) by Justin Hileman
> $t = Testando::find(2)                                                       

   ERROR  Class "Testando" not found in C:\Users\alber\Desktop\PROGRAMAÇÃO\KIWIFY LARAVEL PROJETO ESCOLAeval()'d code.

> use App\Models\Testando;                                                     
> $t = Testando::find(2)                                                       
    nome: "Relacionamento primeiro",
    id_testando: 2,
    created_at: "2022-11-24 09:09:57",
    updated_at: null,
  }

> Testando::with('relacionamento')->find(2)                                    
= App\Models\Testando {#3624
    id: 2,
    string: "String",
    integer: 25,
    decimal: "5.50",
    boolean: 1,
    enum: "opcao_1",
    created_at: "2022-11-24 09:06:06",
    updated_at: null,
    relacionamento: App\Models\Relacionamento {#3631
      id: 2,
      nome: "Relacionamento primeiro",
      id_testando: 2,
      created_at: "2022-11-24 09:09:57",
      updated_at: null,
    },
  }

> $t->relacionamento                                                           
= App\Models\Relacionamento {#3625
    id: 2,
    nome: "Relacionamento primeiro",
    id_testando: 2,
    created_at: "2022-11-24 09:09:57",
    updated_at: null,
  }


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testando extends Model
{
    use HasFactory;

    protected $table = 'testando';

    protected $fillable = [
        'string',
        'integer',
        'decimal',
        'boolean',
        'enum'
    ];

    public function relacionamento()
    {
        return $this->hasOne(Relacionamento::class, 'id_testando');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacionamento extends Model
{
    use HasFactory;

    protected $table = 'relacionamento';

    protected $fillable = [
        'nome',
        'id_testando'
    ];

    public function testando()
    {
        return $this->belongsTo(Testando::class, 'id_testando');
    }
}
