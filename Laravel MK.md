# MK Laravel Guideline

- **الادوات المستخدمة والاصدارات**

	 - Laragon 
	 - PHP Storm IDE
	 - PHP **8.1.10**
	 - Laravel **9.4**

-   لانو بيجي فيه كلشي مثبت خالص مافي داعي نزل كل حزمة لحالها **laragon** استخدمت
  

- **في حال الاوامر ما اشتغلت معنا لازم نضيفها لمجلد الباث في الويندوز** 

	 1. edit the system environment  variables
	 2. environment  variables
	 3. System variables -> Path -> Edit
	 4. New -> Browse -> **.exe

# Laravel Commands

##  Composer Codes :

 - كود انشاء مشروع جديد
> composer create-project laravel/laravel app-name



## Artisan Codes :

- **artisan**كود يمكننا من خلاله معرفة جميع اوامر 
> php artisan 

- كود تشغيل السيرفر
> php artisan serve



## Controller Codes :

**Controller Site :**  https://laravel.com/docs/9.x/controllers#main-content

- **Controller** كود انشاء 
> php artisan make:controller NameController

- **Invoke Controller** كود انشاء 
> php artisan make:controller NameController -i

- **Resource Controller** كود انشاء 
> php artisan make:controller NameController -r 



## Migration Codes : 

**Migration Site:** https://laravel.com/docs/9.x/migrations

-  كود انشاء جدول
> php artisan make:migration create_name's'_table

-  **Database**  كود ارسال البيانات لل
>  php artisan migrate

-  كود التحقق من حالة الجداول 
>  php artisan migrate:status

-  هاد الكود بخلينا نتراجع عن اخر خطوة عملناها
>  php artisan migrate:rollback

-  هاد الكود بخلينا نتراجع عن عدد نحنا بنحددو من الخطوات
>php artisan migrate:rollback --step=4 

-  هاد الكود بخلينا نتراجع عن كل الخطوات
> php artisan migrate:reset

- هاد الكود بقوم بعمل تراجع مع مسح جميع البيانات وبعدها يبعت كل الجداول 
>php artisan migrate:refresh

- هاد بقوم بمسح الجداول دون عمل تراجع وبعدها رد يبعت كل الجداول 
> php artisan migrate:fresh "or" migrate:f

 **seed** هدول اهم الاوامر وفي كمان غيرهم موجودين بالرابط يلي باول الفقرة لازم الاطلاع عليهم مشان ال



## Model Codes: 
- **Model** كود انشاء 
> php artisan make:model Name

-  **Model + Resourse Controller + Migration** كود انشاء
> php artisna make:model Name -mcr



## Validation Codes:

- **Validation Request** كود انشاء 
>php artisan make:request StorePostRequest



##  Authentication Codes : 

-  على المشروع **Authentication_ui**  اكود تثبيت 
> composer require laravel/ui

> // نوع تمصيم واجهة العرض يجب اختيار وحدة من هدول
php artisan ui bootstrap --auth
php artisan ui vue --auth
php artisan ui react --auth
	
> //Node_js install
	  npm install 
	 npm run dev


-  على المشروع **Authentication_breeze**  اكود تثبيت 
> composer require laravel/breeze --dev

> php artisan breeze:install
	
>   //Node_js install
	  npm install 
	  npm run dev

	  
## Middleware Codes:

- **Middleware** كود انشاء 
> php artisan make:middleware CheckUser



##  Seeder  Codes :

- **Seeder** كود انشاء 
>php artisan make:seeder UserSeeder

- **class**  كود ارسال البيانات حسب  
> php artisan db:seed --class=UserSeeder

- **class**  كود ارسال جميع  البيانات بدون   
> php artisan db:seed 


## Factory Codes:
- **factory** كود انشاء 
> php artisan make:factory PostFactory


## Mail Codes : 

- **mailgun** كود تثبيت حزمة ال 
> composer require symfony/mailgun-mailer symfony/http-client

- **Normal Mail** كود انشاء ملف 
> php artisan make:mail TestMail

- **Markdown Mail** كود انشاء ملف 
> php artisan make:mail MarkMail --markdown=emails.markMail

## Event Codes : 

- **Event** كود انشاء 
 > php artisan make:event WelcomeUser

- **Listener** كود انشاء 
> php artisan make:listener SendEmailWelcomeUser --event=WelcomeUser


## Notification Codes: 

-    للاستخدام عن طريق الداتا بيس **Notification**  كود انشاء جدول  
> php artisan notifications:table

-   **Notification**  كود انشاء   
> php artisan make:notification CreatePost

## Queues Codes:

نقوم اولا بانشاء جدول خاص بها في الداتا بيس عن طريق الكود التالي  **Queue**  من اجل انشاء
> php artisan queue:table

 عن طريق الكود التالي  **job**  قمنا بانشاء
> php artisan make:job ActiveUsersJob

## Components Codes:

- **Component** كود انشاء 
> php artisan make:component NavBar



# Route 

**Rout Site :**  https://laravel.com/docs/9.x/routing

 هون الشغل بيعتمد على انشاء عنواين الوصول وربط العناوين مع الكونترولر  

-  طريقة كتابة الراوت البسيط
1.  **get** : هاد يستخدم عند التنقل بين الصفحات  

>

    Route::get('/users اسم المسار بالمتصفح', function (){   
		return view('users ملف البليد المراد عرضو');   	
    });

2.  **post** : **form** و **request** يستخدم لارسال البيانات  الى السيرفر وطبعا وقت ارسال البيانات لازم يكون في 

>

    Route::post('/users اسم المسار بالمتصفح', function (Request $request){   
		return $request;
    });
    
3. **get** with **parameter** :  **form** عن طريق اضافة المتغير بالمسار وبلا **get** هاد بخلينا نبعت بيانات باستخدام ال  

>

    Route::post('/users/{name}', function ($name){   
		return $name;
    });


# Blade system

**Blade Site** : https://laravel.com/docs/9.x/blade

   بنفس الصفحة **html** و اكواد ال **PHP**  هون بيتم كتابة اكواد ال 
  



## Examples :

- Print  :
>

    {{$username}} 
    ----------------------------
    <?php echo ($usermname); ?>

- if else  :
>

	if ($username == 'samir'){
		    echo 'admin';	
	}  
	else {  
			echo 'user';  
	}
    ----------------------------
	@if ($username = 'samir')  
		  admin
	@else  
		  user  
	@endif


## Extends :

 هون فينا نساوي صفحة نحط فيها الاكواد المكررة ونستدعيها عالملف يلي بدنا ياه

- هاد كود ارفاق الصفحة يلي حنستدعي منها اكواد
>

     @extends('layout');
     
- هاد الكود يلي بينحط بصفحة الكود المكرر مشان تحديد المكان يلي حيطلع فيه السكشن
>

     @yield('content');

- هدول اكواد تحديد الفقرة يلي حنرفقها بالصفحة تبع الكود المكرر
>

    @section('content');
     
    @endsection	"or"	@stop

- هي في حالة صار بدنا نعمل تقنية الابن والاظهار
	

1. قمنا اول شي بكتابة هاد الكود بصفحة الكود المكرر	

>

	@section('sidebar')
			This is the side bar
	@show

2. هلا بنقوم باخذ الكود وعرضو بالصفحة يلي بدنا ياها
	- **parent** فينا نستدعي بس 
	-  مع اضافة اشياء **parent** فينا نستدعي 
	- **parent** فينا بس نضيف اشياء وما نستدعي 
>

    @section('sidebar')  
    @parent  
    <h1>Posts</h1>  
    @endsection


## Components

- بس بتفرق معنا طريقة الكتابة وكيفية الاستخدام  **Extends**  الغرض منها نفس ال 

- **Component** كود انشاء 
> php artisan make:component NavBar

- بعد كتابة الامر التالي تم انشاء ملفين في المسارين التاليين
> app/components/NavBar.php
> recourses/views/components/nav-bar.blade.php

- **nav-bar.blade.php** بعد ان كتبنا الكود الخاص بنا في ملف 
- يمكننا استدعائه في اي مكان في المشروع عن طريق الكود التالي 

>

	//الطريقة الاولى
	<x-nav-bar>  
	</x-nav-bar>

	//الطريقة الثانية
	<x-nav-bar/> 



- ###  **Component** طرق اضافة متغير لل 

- #### الطريقة الاولى 

1.  وبنستدعيه وقت بدنا **Component** هي الطريقة مشان استدعاء متغير بنعرفو داخل ملف ال

-  بنعرف المتغير اللازم **Component** بنفوت على ملف ال 

>

	public $name;  
	public function __construct($name)  
	{  
	    $this->name = $name  
	}


- **nav-bar.blade.php** بنضيف مكان المتغير على ملف ال 

>

	<div>  
	 <h1>Wlecom this is nav bar</h1>  
	 <h3>Hello {{$name}}</h3>  
	</div>


- وقت نستدعيه  بصفحة العرض بنكتب التالي 

>
	<x-nav-bar name="MK"/>

2. او يعني من اي مكان**Controller** هي الطريقة مشان استدعاء المتغير من ال 

- وبنعرف متغير  **Controller** بنفوت عال 

>

	public  function index(){  
	    $sport = 'Tennis';  
	 return view('index',compact('sport'));  
	}

- **nav-bar.blade.php** بنضيف مكان المتغير على ملف ال 

>

	<div>  
	 <h1>Wlecom this is nav bar</h1>  
	 <h4>{{$sport}}</h4>  
	</div>


- وقت نستدعيه  بصفحة العرض بنكتب التالي 

>


	<x-nav-bar name='MK' :sport="$sport" />


# Controller

**Controller Site :**  https://laravel.com/docs/9.x/controllers#main-content

## Normal Controller

- **Controller** كود انشاء 

> php artisan make:controller NameController

- **CRUD** يستخدم هاد النمط اذا كان بدنا نعمل عملية او عمليات قليلة وما بنحتاج كامل ال 
- **Controller** لانشاء دالة بسيطة داخل 
>

	public function showUsers(){  
	    return 'users';  
	}
	
- عند كتابة راوتات كتيير عائدين لنفس الكونترولر فينا نكتب بالطريقة هي للاختصار  
>
		
	  ----------------------------الطريقة الطويلة------------------------------
		  
    Route::get('posts',[PostController::class,'showUsers']);  
	Route::get('posts/create',[PostController::class,'createPost']);  
	Route::get('posts/update/{id}',[PostController::class,'updatePost']);  
	Route::get('posts/edit/{id}',[PostController::class,'editPost']);  
	Route::get('posts/delete/{id}',[PostController::class,'deletePost']);
			
    ----------------------------الطريقة المختصرة------------------------------
		  
	Route::controller(PostController::class)->group(function (){  
	Route::get('posts','showUsers');  
	Route::get('posts/create','createPost');  
	Route::get('posts/update/{id}','updatePost');  
	Route::get('posts/edit/{id}','editPost');  
	Route::get('posts/delete/{id}','deletePost');  
	});

## Invoke Controller

- **Invoke Controller** كود انشاء 

> php artisan make:controller NameController -i

-  الفائدة من هذا النمط انه يمكننا انشاء كونترولر يقوم بعملية واحدة فقط 
- يمكننا القيام بانشاء كونترولر عادي يحوي عملية واحدة ولكن هذه الطريقة افضل منطقيا
- طريقة كتابة الراوت في هذا النمط . لا داعي لكتابة اسم الدالة
>

	Route::get('user_profile',UserProfileController::class);


## Resource Controller

- **Resource Controller** كود انشاء 

> php artisan make:controller NameController -r 

- **Route** بشكل جاهز ويختصر علينا كتابة ال **CRUD** الفائدة من انشاء هذا النمط انه يقوم بانشاء عمليات ال 
- انشاء الراوت يكون بهي الطريقة 

>

    Route::resource('/posts',PostController::class);
	    
-  **except  , only** و بدنا نفعل او نلغي راوت معين فينا نستخدم **CRUD** في حال كان بدنا ما نستعمل كامل عملية ال 
>

    Route::resource('/users',UserController::class)->except([  
	       'create', 'update', 'edit'  
    ]);

	Route::resource('/users',UserController::class)->only([  
		 'index' , 'create'  
	]);


# Migration

**Migration Site:** https://laravel.com/docs/9.x/migrations

- عملها انها تقوم بالتعامل مع قاعدة البيانات 
- **env**  يمكننا التعديل على معلومات الاتصال وكل ما يتعلق بقاعدة البيانات من ملف 

-  كود انشاء جدول
> php artisan make:migration create_name's'_table

-  **Database**  كود ارسال البيانات لل

>  php artisan migrate

-  كود التحقق من حالة الجداول 

>  php artisan migrate:status


## Tables Data Types Examples :  
>

	$table->string('title',4 );  // هون النوع نصي وحددنا عدد الاحرف 4 
	------------------------------------------------------------------
	$table->boolean('check')->default(0); // هون قيمة بوليان وحددنا قيمة افتراضية 0 
	------------------------------------------------------------------
	$table->$table->unsignedBigInteger('user_id'); // unsigned يعني قيم موجبة فقط 

- More Data Types : [Database: Migrations - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/9.x/migrations#available-column-types)

## Rolling Back Migration :

-  هاد الكود بخلينا نتراجع عن اخر خطوة عملناها

>  php artisan migrate:rollback

-  هاد الكود بخلينا نتراجع عن عدد نحنا بنحددو من الخطوات
>php artisan migrate:rollback --step=4 

-  هاد الكود بخلينا نتراجع عن كل الخطوات
> php artisan migrate:reset

- هاد الكود بقوم بعمل تراجع مع مسح جميع البيانات وبعدها رد يبعت كل الجداول 
>php artisan migrate:refresh

- هاد بقوم بمسح الجداول دون عمل تراجع وبعدها رد يبعت كل الجداول 
> php artisan migrate:fresh "or" migrate:f

 **seed** هدول اهم الاوامر وفي كمان غيرهم موجودين بالرابط يلي باول الفقرة لازم الاطلاع عليهم مشان ال

## Add Migration :
- هون الشغل بكون في حالة بدنا نضيف  عمود جديد بقلب جدول بدون ما ناثر عالجدول 

-  كود اضافة عمود الى جدول 
> php artisan make:migration add_body_to_posts

- بعد اضافة الجدول فينا نضيف عواميد جديدة  وفينا نحدد مكان وجودها بعد اي عمود مثل هون  
> 
	public function up()  
	{   //insert  
	  Schema::table('posts', function (Blueprint $table) {  
	        $table->string('body')->after('title');  
	  });  
	}
- **down** مشان عملية الحذف او مشان وقت عملية التراجع لازم نكتب العمود بال 
>
	public function down()  
	{   //delete  
	  Schema::table('posts', function (Blueprint $table) {  
	        $table->dropColumn('body');  
	  });  
	}

## Foreign Key
- يستخدم لربط جدولين ببعض وفي طريقتين لكتابته 
> 

	// Big Integer الطريقة الاولى ويجب الانتباه انو 
	$table->unsignedBigInteger('user_id');  
	$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
			  
	//الطريقة الثانية  وفينا نترك الخيار التاني فاضي بس لزيادة التاكيد كتبنا اسم الجدول		  
	$table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
		

# Query Builder

**Query Builder Site :** https://laravel.com/docs/9.x/queries

### url and route
-   بالفورم مشان نحدد المسار يلي رايحلو **action** هدول الاثنين بتم استدعائهم وقت نحط ال 

**url: هون بنستدعي الراوت عن طريق المسار**
>

	Route::post('/post/store',[PostController::class,'store']);
	
	//استدعاء عن طريق الرابط
	<form action="{{url('/post/store')}}" method="POST">

**route: هون بنستدعي الراوت عن طريق وضع اسم الراوت ثم وضعو بالفورم اكشن**
>
	
	Route::post('/post/store',[PostController::class,'store'])->name('post.store');
	
	//استدعاء عن طريق اسم الراوت
	<form action="{{route('post.store')}}" method="POST">


## CRUD with query builder : 

-  ### Create:
	- عمل هذه الدالة هي اننا نقوم بانشاء صفحة فورم وعرضها من خلالها 
	-  **get** يجب الانتباه انو نوع الارسال 
	- **view** يجب انشاء صفحة عرض 
>

	// Controller 
	public function create(){  
	   return view('posts.create');  //الصفحة يلي فيها الفورم
	}
	
	// Route
	// get  نوع الارسال 
	Route::get('/post/create',[PostController::class,'create']);

	//form 
	<form action="{{route('post.insert')}}" method="POST">

#

-  ### Insert or  Store:
	- عمل هذه الدالة هي انها تقوم باخذ المعلومات من الفورم وارسالها لقاعدة البيانات
	- **post** يجب الانتباه انو نوع الارسال 
	- **view** لا يجب انشاء صفحة عرض 
>

	// Controller 
	public function insert(Request $request){  
    DB::table('posts')->insert([  
        'title' => $request->title,  // 'row name in db' => requset-> name of input in form
	    'body' => $request->body  
	]);  
	  
	 return response('Data has been sent');  
	}
	
	// Route
	// post نوع الارسال 
	Route::post('/post/store',[PostController::class,'store'])->name('post.store');

#

-  ### index :
	- هاد بنربطو بالصفحة الرئيسية يلي حنعرض فيها  **"كل"** البيانات جاية من قاعدة البيانات 
	-  **get** يجب الانتباه انو نوع الارسال 
	- **view** يجب انشاء صفحة عرض
>

	// Controller 
	public function index(){  
	    $posts = DB::table('posts')->get();   // هون  بننشا متغير مشان نستقبل عن طريقو الداتا 
	 return view('posts.index',compact('posts'));  
	}

	// Route 
	Route::get('posts',[PostController::class,'index'])->name('posts');
	
#

- ### edit  or show :
	- عملها انها تقوم باستدعاء **"لعرض"** داتا **"معين"** نحن نضع شروط ظهوره من قاعدة البينات 
	-  تستخدم غالبا في استدعاء بيانات من جدول معين  وتحضيره من اجل التعديل
	-  **get** يجب الانتباه انو نوع الارسال 
	-  **view**يجب انشاء صفحة عرض
>

	// Controller 
	public function edit($id){  
	    $post = DB::table('posts')->where('id',$id)->first();  // 'id' = $id 
	    
	 return view('posts.edit',compact('post'));  
	}
	
	//Route 
	// يجب الانتباه الى اضافة الاي دي او المتغير المطلوب في المسار
	Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');

	//form 
	<form action="{{route('post.update',$post->id)}}" method="POST">

	//button in form 
	<a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>

#

- ### update : 
	- هي شغلتها **"ارسال"** البيانات من اجل تعديل القيمة السابقة فيها 
	- **put** يجب الانتباه انو نوع الارسال 
	-   و غالبا بداخلها بنعمل اعادة توجيه للصفحة الرئيسية **view**لا يجب انشاء صفحة عرض 
>
	
	// Controller 
	public function update(Request $request, $id){  
	    DB::table('posts')->where('id', '=' ,$id)->update([   //'id' = $id
	        'title' => $request->title,  
	  'body' => $request->body  
	  ]);  
	  
	 return redirect()->route('posts');  
	}
	
	//Route 
	// put نوع الارسال 
	Route::put('post/update/{id}',[PostController::class,'update'])->name('post.update');

#

- ### delete : 
	- هي شغلتها حذف شيء معين عن طريق الاي دي او اي شي نحنا بنحددو  
	- **delete** اذا كان الارسال من **"فورم"** نوع الارسال بكون
	- **get** اذا كان الارسال من **"لينك"** نوع الارسال بكون 
>

	// Controller 
	public function delete($id){  
    DB::table('posts')->where('id',$id)->delete();   // 'id' = $id
    
	 return redirect()->route('posts');  
	}
	
	//Route 
	//link اذا كان من 
	Route::get('post/delete/{id}',[PostController::class,'delete'])->name('post.delete');  
	//form اذا كان من 
	Route::delete('post/delete/{id}',[PostController::class,'delete'])->name('post.delete');

	//link button in form 
	<a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>

#

- ### delete all : 
	- وظيفتها حذف كلشي موجود مع **"الاحتفاظ"** بترتيب الاي دي 
	- **delete** اذا كان الارسال من **"فورم"** نوع الارسال بكون
	- **get** اذا كان الارسال من **"لينك"** نوع الارسال بكون 

>

	// Controller 
	public function deleteAll(){  
    DB::table('posts')->delete();  
  
	return redirect()->route('posts');  
	}
	
	//Route 
	//link اذا كان من 
	Route::get('posts/delete/all',[PostController::class,'deleteAll'])->name('posts.delete.all');
	//form اذا كان من 
	Route::delete('posts/delete/all',[PostController::class,'deleteAll'])->name('posts.delete.all');

	//link button in form 
	<a href="{{route('posts.delete.all')}}" class="btn btn-danger">Delete ALL</a>

#

- ### delete all  Truncate: 
	- وظيفتها حذف كلشي موجود مع **"تصفير"** ترتيب الاي دي 
	- **delete** اذا كان الارسال من **"فورم"** نوع الارسال بكون
	- **get** اذا كان الارسال من **"لينك"** نوع الارسال بكون 

>

	// Controller 
	public function deleteAllTruncate(){  
    DB::table('posts')->truncate();  
  
    return redirect()->route('posts');  
    }
	
	//Route 
	//link اذا كان من 
	Route::get('posts/delete/all/truncate',[PostController::class,'deleteAllTruncate'])->name('posts.delete.all.truncate');
	//form اذا كان من 
	Route::delete('posts/delete/all/truncate',[PostController::class,'deleteAllTruncate'])->name('posts.delete.all.truncate');

	//link button in form 
	<a href="{{route('posts.delete.all.truncate')}}" class="btn btn-warning">Delete ALL Truncate</a>


# Eloquent

**Eloquent Site :** https://laravel.com/docs/9.x/eloquent

- ..  الموديل هو المسؤول عن ادارة البيانات والعلاقة بينها والحماية الخ

- **Model** كود انشاء 

> php artisan make:model Name

-  **Model + Resourse Controller + Migration** كود انشاء

> php artisna make:model Name -mcr

- في اكواد مشان انشاء اضافة اشياء اكتر مع الموديل موجودة بالرابط يلي فوق

## حالة اذا كان اسم الجدول مو متناسق مع اسم الموديل 


 1. Post في حال انشانا موديل اسمو 
 2.  my_posts وانشانا جدول بالداتا بيس اسمو 
  3. هون بهي الحالة لارفيل مارح يفهم لحالو انو هدول مترابطين ببعض
  4. بيتوجب علينا تعريف الموديل بالجدول عن طريق كتابة الكود التالي داخل الموديل 
>

	Class Post extends Model
	{
		use HasFactory;
		
		//هاد كود التعريف ببعض 
		protected $table = "my_posts";
	}

## حالة اذا كان بدنا نضيف او نعطل خصائص افتراضية 

- في بعض الخصائص الافتراضية الموجودة احيانا يتطلب الامر انو نلغي تفعيلها او نعدل عليها وهي بعض الامثلة
>

	Class Post extends Model
		{
			use HasFactory;
			
			// Timestamps اذا بدنا نوقف ال 
			public $timestamps  =  false;
			
			// primary key اذا بدنا نغير ال 
			protected $primaryKey = 'post_id';

			// auto increment  اذا بدنا نوقف ال 
			public $incrementing = false;
		}

- وفي غيرهم كمان يمكن الاطلاع عليهم من الرابط اول الفقرة

## CRUD with Eloquent : 

 - ### Important Note :
	-	بتكون كالتالي  **route** طريقة كتابة ال **resoursce controller** لما ننشا 
	
>
	Route::resource('posts',PostController::class);
	
- كود اظهار جميع المسارات الموجودة مهم جدا لمعرفة اسم كل مسار وطريقة الوصول اليه 

> php artisan route:list

#	 
 -  ### Create:

	-   عمل هذه الدالة هي اننا نقوم بانشاء صفحة فورم وعرضها من خلالها
	- **get** يجب الانتباه انو نوع الارسال 
	- **view** يجب انشاء صفحة عرض 

>

	// Controller 
	public function create(){  
	   return view('posts.create');  //الصفحة يلي فيها الفورم
	}
	
	//form 
	<form action="{{route('posts.store')}}" method="POST">

#

 -  ### Store or insert :
 
	- عمل هذه الدالة هي انها تقوم باخذ المعلومات من الفورم وارسالها لقاعدة البيانات
	- **post** يجب الانتباه انو نوع الارسال 
	- **view** لا يجب انشاء صفحة عرض 
	-  فينا نرسل البيانات بطريقتين  **Eloquent Model** عند استخدام طريقة 
	
	
1.  New object , Save
>
	
	// Controller 
	public function store(Request $request)  
	{  
	  $post = new Post();  
	  $post->title = $request->title;  
	  $post->body = $request->body;  
	  $post->save();  
	}

2.  create() **"fillable"** :
>

	// Controller 
	public function store(Request $request)  
	{  
		Post::create([  
		'title' => $request->title,  	// 'table name' => $request->form input name
		'body' => $request->body  
	]);  
 
 - **fillable** عند استخدام هي الطريقة يجب الانتباه انو لازم نكون عاطين اذن للدخول للجداول عن طريق اضافة
 - تتم اضافتو داخل الموديل العائد للجداول 
 - هون العملية بحيث انو ما داخل المصفوفة مسموح والباقي ممنوع
>	

	// Model
	class Post extends Model  
	{  
	    use HasFactory;  
	    
	 protected $fillable=['title','body'];  
	}

-   بقوم بنفس العملية  **guarded**ويمكن ايضا مشان ما نكتب كتير في عنا الامر 
-  هون العملية عكسية بحيث انو يلي داخل المصفوفة ممنوع  والباقي مسموح
-  افضل من هي **fillable** مشان زيادة الامان ال 
- كالتالي  **guarded**طريقة كتابة ال 
> 

	// Model
	class Post extends Model  
	{  
	    use HasFactory;  
	  
	 protected $guarded=[];  
	}

3. all() : 
	- هي الطريقة مشان اضافة كلشيء 
	- لكن لا ينصح بها لانو لازم يكون اسماء الجدوال والمدخلات بالفورم نفس بعض

> 

	// Controller 
	public function store(Request $request)  
	{  
		Post::create(
			 $request->all();
		);
	}

#

-  ### index :
	- هاد بنربطو بالصفحة الرئيسية يلي حنعرض فيها  **"كل"** البيانات جاية من قاعدة البيانات 
	- الغرض منو العرض 
	- **get** يجب الانتباه انو نوع الارسال 
	- **view** يجب انشاء صفحة عرض 
	-   والاثنين نفس العمل **get()** او دالة  **all()**  عند استدعاء البيانات فينا نستخدم دالة 
	
>

	// Controller 
	public function index()  
	{  
	 $posts = Post::all();  
	 return view('posts.index',compact('posts'))  
	}

#

- ### edit  :
	-  عملها انها تقوم باستدعاء * داتا **"معين"** نحن نضع شروط ظهوره من قاعدة البينات 
	-  تستخدم غالبا في استدعاء بيانات من جدول معين  وتحضيره من اجل التعديل
	- **get** يجب الانتباه انو نوع الارسال 
	-  **view**يجب انشاء صفحة عرض
	- يمكن استخدام طريقيتن للاستدعاء 
	
1. find : 
	- id تستخدم هذه فقط من اجل استدعاء ال 
	-  عليها بحيث انها تقوم بارجاع صفحة 404 اذا كانت الصفحة غير موجودةOrFial يمكننا اضافة 

>

	// Controller 
	public function edit($id)  
	{  
	    $post = Post::findOrFail($id);  
	 return view('posts.edit',compact('post'));  
	}

	//form
	<form action="{{route('posts.update',$post->id)}}" method="POST">

	// link in form 
	<a href="{{route('posts.edit',$post->id)}}">Edit</a>

2. where :

	- تستخدم هذه الطريقة لاستدعاء اي طلب ويمكن اضافة شرط عليه 
	
>

	// Controller 
	public function edit($id)  
	{  
	    $post = Post::where('id',$id)->first();  // 'id' = $id
	 return view('posts.edit',compact('post'));  
	}

	//form 
	<form action="{{route('posts.update',$post->id)}}" method="POST">

#

- ### update : 
	- هي شغلتها **"ارسال"** البيانات من اجل تعديل القيمة السابقة فيها 
	- **put** يجب الانتباه انو نوع الارسال 
	-   و غالبا بداخلها بنعمل اعادة توجيه للصفحة الرئيسية **view**لا يجب انشاء صفحة عرض 
	- يمكن استخدام طريقتين للتعديل 
>
	
1.  object , Save
		- **new** هون يجيب الانتباه انو مافي داعي نكتب 
		-  لانو طبعا الكائن موجود ونحنا بس عم نعدل عليه
>
	
	// Controller 
	public function update(Request $request, $id)  
	{  
	  $post = Post::findOrFail($id);  
	  
	  $post->title = $request->title;  
	  $post->body = $request->body;  
	  $post->save();  
	  
	 return redirect()->route('posts.index');  
	}

2.  update()  :
>

	// Controller 
	public function update(Request $request, $id)  
	{  
	  $post = Post::findOrFail($id);  
	  
	  $post->update([  
	       'title' => $request->title,  
	       'body' => $request->body   
	 ]);  
	 
	 return redirect()->route('posts.index');
	}

3. all() : 
	- هي الطريقة مشان تعديل كلشيء 
	- لكن لا ينصح بها لانو لازم يكون اسماء الجدوال والمدخلات بالفورم نفس بعض

> 

	// Controller 
	public function update(Request $request, $id)  
	{  
	  $post = Post::findOrFail($id);  
	  
	  $post->update(  
	        $request->all()  
	  );  
	  
	 return redirect()->route('posts.index');
	}

#

- ### delete : 
	- هي شغلتها حذف شيء معين عن طريق الاي دي او اي شي نحنا بنحددو  
	- **delete** اذا كان الارسال من **"فورم"** نوع الارسال بكون
	- **get** اذا كان الارسال من **"لينك"** نوع الارسال بكون 
	-  في طريقتين للحذف رح اكتبهم بنفس الجدول مو محرزة
>

	// Controller 
	public function destroy($id)  
	{  
		//الطريقة الاولى
	    Post::findOrFail($id)->delete();  
	    //الطريقة الثانية
		Post::destroy($id);  
		  
	 return redirect()->route('posts.index');  
	}
	
	// delete form in form
	<form action="{{route('posts.destroy',$post->id)}}" method="POST">  
	 @csrf  
	 @method('DELETE')  
	<button type="submit">Delete</button>  
	</form>

#

- ### Soft Delete : 
- وظيفتها انو بنعمل عن طريقها ارشيف للاشياء المحذوفة 
- **view**يجب انشاء صفحة عرض 
- مهتمو ارشفة الاشياء المحذوفة **deleted_at**  طريقة عملها انو بتقوم بعمل جدول بالداتا بيس  اسمو 
-  يلي بدنا نضفلو الخاصية **Migration**  وملف ال  **Model** لتفعيل هي الخاصية لازم نضيف اوامر لملف ال 
>

	//Model 
	class Post extends Model  
	{  
	 use HasFactory;  
	 
	 use SoftDeletes;  
	}

	//Migration 
	public function up()  
	{  
	Schema::create('posts', function (Blueprint $table) {  
	  $table->id();  
	  $table->string('title',50);  
	  $table->text('body');  
	  $table->softDeletes();  //بنضيفو بالجدول يلي بدنا ندعم هالموة فيه
	  $table->timestamps();  
	  });  
	}

- لانو فاضية بس بالحالة الطبيعية لازم ننشئ كونترلر وراوت جديد بكون افضل **show** هون بهاد المثال استخدمنا دالة 

>

	//Controller
	public function show($id)  
	{  
	    $posts = Post::onlyTrashed()->get();  
	    
	 return view('posts.softdelete',compact('posts'));  
	}
	
	//form :  بعدين لازم نحطو كالتالي restore في حال بدنا نضيف زر 
	<a href="{{route('post.restore',$post->id)}}">Restore</a>

-  لانو المطلوب عرضو نفسو تقريبا **index** هون بالمثال ساوينا صفحة نسخة عن صفحة ال 

#

- ### Soft Delete Restore : 
- وظيفتها ارجاع الملفات يلي ارشفناها من وضع الحذف للوضع الطبيعي 
- **Resource Controller** طبعا مشان اتمام العملية انشانا دالة جديدة بقلب ال 
-  جديد **Route** وانشانا 

>
		
		//Controller 
	public function restore($id){  
	
		Post::withTrashed()->where('id',$id)->restore();  // 'id' = $id
		
	 return redirect()->back();  
	}

#

- ### Soft Delete Force Delete : 
- هي تستخدم مشان الحذف النهائي 
- فينا نحذف نهائي من الارشيف متل ما حنعمل هون او فينا نضيفها وين ما بدنا 
- **get** او  **post** ملاحظة : في حال صار مشكلة فينا نبدل نمط ارسال 
- جديد  **Route** و **Controller** طبعا انشانا دالة جديدة بال 

>
		
	//Controller
	public function forceDelete($id){  
	    Post::withTrashed()->where('id',$id)->forceDelete();  //'id' = $id
	 return redirect()->back();  
	}
	
	//Route
	Route::get('posts/forcedelete/{id}',[PostController::class,'forceDelete'])->name('post.forcedelete');

	//form :  
	get في حال كان لينك بكون 
	delete or post بكون form  في حال كان 
	هون من باب العجلة كتبناه هيك بس اذا شفتو فتت بالحيط انسا انو مكتوب
	<form action="{{route('post.forcedelete',$post->id)}}" method="get">  
	 @csrf  
	<button type="submit">Delete</button>  
	</form>

## Query Scopes Using Model

-	 حسب فهمي هي العلاقة يلي بتم عن طريقها العمل مع قاعدة البيانات **query** 
-	**controller** وبنستدعيه  من  **model** الوظيفة من انو بسهل علينا العملية بحيث انو بنكتب الشرط بال **scope** 
-   بس هو وين ما كان بينكتب **index** هون بس من اجل اختصار الكتابة كتبنا الاستدعاء  بال

1. **scope** هي الطريقة  بدون استخدام 

	- **Model** فقط وما بنقرب عال **Controller** بتكون بال **query**  طبعا بهي الطريقة كتابة ال

>

	//Controller 
	scope الطريقة الطويلة بدون
	public function index()  
	{  
    $post = Post::where('body', '=', 'asda2131')->first();  
  
	return $post;
	}

2. **scope** هي الطريقة  باستخدام 

	-  **Controller**  وبنستدعي الشرط بال **Model**  بتكون بال  **query**  بهي الطريقة كتابة ال 
	- لانو بدونها مارح يشتغل  **scope** هون يجب الانتباه وقت تعريف الدالة كتابة كلمة 

>
	
	//Controller 
	public function index()  
	{  
	 $post = Post::Mk()->first();  
	 return $post;
	 }

	//Model 
	public function scopeMk($query){  
	    return $query->where('body', '=' ,'asda2131');  
	}


# Validation 

**Validation  Site :** https://laravel.com/docs/9.x/validation

- هي العملية هي عبارة عن عملية تحقق من صحة البيانات وفق شروط نحنا بنحدها 

## Normal Validation

-    **Controller** بداخل ال **Validation** هون العملية عبارة انو بنحط شروط التحقق  
-  **'store' 'update'** غالبا بنستخدم هالعملية ب 
-  **validation request** تستخدم هي الطريقة اذا عدد الجداول مو كبير في حال كان كبير استخدم طريقة 

>

	public function store(Request $request)  
	{  
	  $request->validate([  
	    'title' => ['required','max'],  // طريقة الكتابة الاولى
	    'body' => 'required|max:500', // طريقة الكتابة الثانية
	  ]);  
	  
	  Post::create([  
	        'title' => $request->title,  
		    'body' => $request->body  
	  ]);  
	  
	 return redirect()->route('posts.index');  
	} 

- : يمكن الوصول لجميع الشروط المتاحة من الرابط  https://laravel.com/docs/9.x/validation#available-validation-rules


## Validation Request

- تستخدم هي الطريقة في حال كانت الشروط كتيرة  مشان يكون الموضوع منظم اكتر

- **Validation Request** كود انشاء 

>php artisan make:request StorePostRequest

- بعد الانشاء ممكن الوصول للملف عن طريق المسار التالي 
> app/Http/Requests

- **true** عند الدخول للملف يجب التاكد من تفعيل الكود عن طريق كتابة 
>

	public function authorize()  
	{  
	   return true;  
	}

- **Controller** تتم كتابة الشروط داخل الدالة هي ويجب استدعائها بداخل الدالة بال 

>

	//Request
	public function rules()  
	{  
	    return [  
	      'title' => ['required','max:255'],  
		  'body' => 'required|max:500',  
	  ];  
	}

	//Controller 
	public function store(StorePostRequest $request)//request انتبه انو تستدعي ال
	{  
	    Post::create([  
	        'title' => $request->title,  
			'body' => $request->body  
	  ]);  
	  
	 return redirect()->route('posts.index');  
	}

## Validation error


- هي عبارة عن خاصية موجودة مشان اظهار رسالة  للمستخدم عند وجود خطا في التحقق
- مثال اذا كان الحقل متروك فارغ  او كلمة السر غير متطابقة 

 - ### اماكن وجود ملفات النصوص الجاهزة وطرق التعديل عليها

1. عن طريق الملف الرئيسي

- في حال بدنا نصل للملف يلي بيحوي على الرسائل الجاهزة بنروح عالملف التالي 

> lang/en/validation.php

-  جوا الملف هاد فينا نعدل الرسائل بس لا ينصح بذلك واستخدام غير طرق افضل 
 -  **github** يمكن اضافة لغة جديدة وتحميل الترجمة من 

### 

 2.  **validation request** داخل ملف ال  **function**  عن طريق اضافة 
 - هون فينا نكتب كل رسالة جنب شرط التحقق تبعها 
>

	public function messages()  
	{  
	    return[  
	      'title.required' => 'يرجى ادخال عنوان البوست',  
	  'title.max' => 'يرجى ادخال عدد احرف اقل ',  
	  'body.required' => 'يرجى ادخال معلومات البوست',  
	  ];  
	}
	
#
 - ### طرق استدعاء رسالة الخطا
 
1. نكتب رسالة التحقق تحت كل حقل 
>

	<div class="mb-3 mt-5">  
	 <label for="title" class="form-label">Title</label>  
	 <input type="text" name="title" class="form-control" id="title" placeholder="Enter The title">  
	 
	@error('title')  
	<div class="alert alert-danger mt-2">{{$message}}</div>  
	@enderror  
	
	</div>

2. انو نعمل حلقة تكرارية لاظهار جميع الاخطاء في مكان واحد 

>

	@if ($errors->any())  
	<div class="alert alert-danger">  
	<ul>  
    @foreach ($errors->all() as $error)  
	<li>{{ $error }}</li>  
	@endforeach  
	</ul>  
	</div>@endif

# 

 - ###  "old"  طريقة الاحتفاظ بالبيانات عند حدوث خطا في تعبئة الحقول عن طريق دالة 
- مهمة هذه الدالة انه في حال حدوث خطا اثناء تعبئة الفورم تمكن المتسخدم من حفظ باقي المعلومات المكتوبة
- بحيث انها لا تقوم بحذف البيانات في الحقول المعبئة 
>
	
	<input type="text" name="title" id="title" value="{{old('title')}}">
	
	<textarea  name="body" id="body" rows="3" >{{old('body')}}</textarea>



# Relation Ships

**Eloquent Relationships Site:** https://laravel.com/docs/9.x/eloquent-relationships

- database هي الفقرة تحوي على العلاقات بين الجداول في ال 
- طبعا هي الفقرة من اهم الفقرات لهيك يجب فهمها بشكل جيد 

## One To One 
- تستخدم هذه العلاقة في حال كان المطلوب منا ربط شيء  بشي واحد
- مثال لكل مستخدم رقم هاتف واحد 
-   بعلاقة واحدة **phone** مرتبط بجدول ال **users** بهذه الحالة يكون جدول 

#

- ### **Model** طريقة كتابة العلاقات داخل ال 
		
1. User model :
	
>

	public function phone(){  
	    return $this->hasOne(Phone::class);  //له ارتباط واحد
	    
	    //فينا نكتب اسم الفورين كي هيك لزيادة التاكيد او في حال كان الاسم مختلف او بدنا نربط بفورين كي معين 
	    return $this->hasOne(Phone::class,'user_id'); 
	}

2. Phone model : 

>

	public function user(){  
	    return $this->belongsTo(User::class); //مربوط او يتبع   
	}

#
- ### **Foreignkey**  طريقة كتابة ال 

>

	//الطريقة الاولى
	$table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
	
	
	//الطريقة الثانية
	$table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();



#

- ###  **Controller**  طريقة استدعاء البيانات في ال 

>
	
	//User
	طريقة كتابة  
	$user = User::find(1)->phone;  
	return $user;

	طريقة كتابة  
	$user = User::find(1);  
	return $user->phone;

	//Phone
	طريقة كتابة  
	$phone = Phone::find(2)->user;  
	return $phone;
	
	طريقة كتابة  
	$phone = Phone::find(2);  
	return $phone->user;


## One To Many

- تستخدم هذه العلاقة في اردنا ربط شيء بعدة اشياء
- مثال لكل منشور عدة تعليقات
-  بعدة علاقات للمنشور الواحد **comments** مرتبط بجدول **posts** بهذه الحالة يكون جدول 

#

- ### **Model** طريقة كتابة العلاقات داخل ال 
		
1. Post model :
	
>

	public function comments(){  
		return $this->hasMany(Comment::class);  
		
		//فينا نكتب اسم الفورين كي هيك لزيادة التاكيد او في حال كان الاسم مختلف او بدنا نربط بفورين كي معين 
	    return $this->hasMany(Comment::class,'user_id');  
	}


2. Comment model : 

>

	public function post(){  
	    return $this->belongsTo(Post::class);  
	}

#
- ### **Foreignkey**  طريقة كتابة ال 

>

	//الطريقة الاولى
	$table->foreignId('post_id')->constrained('users')->cascadeOnDelete();
	
	
	//الطريقة الثانية
	$table->foreignId('post_id')->references('id')->on('posts')->cascadeOnDelete();

#

- ###  **Controller**  طريقة استدعاء البيانات في ال 

>
	
	//Post
	طريقة كتابة  
	$post = Post::find(1)->comments;  
	return $post;

	طريقة كتابة  
	$post = Post::find(1);  
	return $post->comments;

	//Comment
	طريقة كتابة  
	$comment = Comment::find(2)->post;  
	return $comment;
	
	طريقة كتابة  
	$comment = Comment::find(2);  
	return $comment->post;



## Many To Many
- تستخدم هذه العلاقة في اردنا ربط عدة اشياء بعدة اشياء
- يكون الربط بينهم عن طريق انشاء جدول وسيط 
- مثال عليه لكل مستخدم عدة صلاحيات ولكل صلاحية عدة مستخدمين
-  **roles** وهذ الجدول مربوط ايضا بجدول **role_user** مرتبط بجدول **users** بهذه الحالة يكون جدول 


> users ---------------> role_user <----------------- roles
- **pivot** الجدول الوسيط يطلق عليه اسم 

#

- ###  طريقة انشاء علاقة كل لكل 

1. للجدول الاول  **Migration** مع ملف ال **Model** ننشا 

> php artisan make:model User -m

2.  للجدول الثاني  **Migration** مع ملف ال **Model** ننشا 

> php artisan make:model  Role -m

3.   لوحده بدون موديل لانه لا حاجة لنا به للجدول الوسيط **Migration** ننشا ملف 
-  زيادة **pivot** ملاحظة مهمة جدا هون اثناء كتابة اسم الجدول حطينا كلمة 
-  نكتب اسم الجدول كامل **Model** بهالحالة يتطلب الموضوع منا وقت ربط الجداول الاخرى مع هاد الجدول بال 
- **pivot**  اذا بدنا نتجنب هالمشكلة ويفهم لارافيل لحالو انو يربطهم ببعض لازم نلغي كلمة 

>php .\artisan make:migration create_role_user_pivot_table

#
- ### **Model** طريقة كتابة العلاقات داخل ال 
		
1. User model :
	
>

	public function roles(){  
	    return $this->belongsToMany(Role::class);  
	
		
		//pivot هون كتبنا اسم *****الجدول***** ضروري ليتعرف عليه الموديل لانو مغيرين بالاسم وكاتبين 
	    return $this->belongsToMany(Role::class,'role_user_pivot'); 
	}


2. Role model : 

>

	public  function users(){  
	return $this->belongsToMany(User::class);  
	
	//pivot هون كتبنا اسم *****الجدول***** ضروري ليتعرف عليه الموديل لانو مغيرين بالاسم وكاتبين 
	 return $this->belongsToMany(User::class,'role_user_pivot');
	}

#
- ### **Foreignkey**  طريقة كتابة ال 
-  هو لحالو بيفهم انو يربط بين الجدولين مثل المثال التالي **Foreignkey** هون مافي كتابة  
-  طبعا هي الكتابة بداخل الجدول الوسيط 
>

	public function up()  
	{  
	Schema::create('role_user_pivot', function (Blueprint $table) {  
	  $table->id();  
	  $table->integer('user_id');  //users للربط مع جدول ال
	  $table->integer('role_id');  //roles للربط مع جدول ال
	  });  
	}

#

- ###  **Controller**  طريقة استدعاء البيانات في ال 

>
	
	//User
	طريقة كتابة  
	$user = User::find(1)->roles;  
	return $user;

	طريقة كتابة  
	$user = User::find(1);  
	return $user->roles;

	//Role
	طريقة كتابة  
	$role = role::find(1)->users;  
	return $role;
	
	طريقة كتابة  
	$role = Role::find(1);  
	return $role->users;

# Accessors & Mutators

Accessors & Mutators  Site :  https://laravel.com/docs/9.x/eloquent-mutators#defining-an-accessor

1.    وظيفتو التعامل مع البيانات اثناء **"استلامها"** من الداتا بيس والتعديل عليها في الصفحة  **Accessors**
- لا يعدل القيمة الحقيقة الموجودة في الداتا بيس وانما فقط اثناء ظهورها في الصفحة
- مثال عليه عند استقبال الاسم من الداتا بيس نساوي احرفه كبيرة
- **get** يستخدم دالة 

2.  وظيفتو التعامل مع البيانات اثناء **"ارسالها"** الى الداتا بيس  **Mutators**
- يعدل القيمة المرسلة الى الداتا بيس ويتم حفظها
-  مثال عليه عند ارسال اسم باحرف صغيرة يعدل الاحرف الى كبيرة ثم ترسل الى الداتا بيس
- **set** يستخدم دالة 


- ### طريقة الكتابة 
>

	//Model 
	//laravel 9.x
	protected function Name(): Attribute  //يجب الانتباه انو الاسم يكون صحيح 
	{  					   				// بحيث يكون نفس اسم الجدول
	    return Attribute::make(  
	      get : fn($value) => strtolower($value),  // Accessors
	      set : fn($value) => strtoupper($value)  // Mutators
	  );  
	} 

	//Model 
	//laravel 8.x 
	public function getNameAttribute($value)  // Accessors
	{  
	    return strtolower($value);  
	}

	public function setNameAttribute($value)  // Mutators
	{  
	    return strtoupper($value);  
	}

		
# Authentication Systems

Authentication Site : https://laravel.com/docs/9.x/authentication

- وظيفتها القيام بانشاء عملية تسجيل الدخول والخروج والتحقق

## 1.  Authentication_ui 

 Authentication_ui Link : https://github.com/laravel/ui

- **Authentication**  تعتبر هي ابسط طريقة للقيام بانشاء عملية 

-  على المشروع **Authentication_ui**  اكود تثبيت 
> composer require laravel/ui

> // نوع تمصيم واجهة العرض يجب اختيار وحدة من هدول
php artisan ui bootstrap --auth
php artisan ui vue --auth
php artisan ui react --auth
	
> //Node_js install
	  npm install 
	  npm run dev

- **Route "web.php"** عن طريق اضافة هذا الكود في ال  **Register** يمكن تعطيل خاصية 
>

	Auth::routes(['register'=> false]);

## 2.  Authentication_breeze

 Authentication_breeze Link :  https://laravel.com/docs/9.x/starter-kits#laravel-breeze
 
- **Authentication**  تعتبر من اشهر الطرق  للقيام بانشاء عملية 

-  على المشروع **Authentication_breeze**  اكود تثبيت 
> composer require laravel/breeze --dev

> php artisan breeze:install
	
>   //Node_js install
	  npm install 
	  npm run dev

- **Route "auth.php"**  او اي خاصية عن طريق التعديل في الاكواد في  ال   **Register** يمكن تعطيل خاصية 
>

	//Route::get('register', [RegisteredUserController::class, 'create'])  
            ->name('register');  
  
	//Route::post('register', [RegisteredUserController::class, 'store']);


## 3.  Authentication_jetstream

 Authentication_jetstream Link :  https://jetstream.laravel.com/2.x/installation.html
 
- **Authentication**  تعتبر من افضل الطرق التي تحوي خصائص كثيرة  للقيام بانشاء عملية 

-  على المشروع **Authentication_jetstream**  اكود تثبيت 

> composer require laravel/jetstream

> php artisan jetstream:install livewire
    php artisan jetstream:install livewire --teams

	
>   //Node_js install
	  npm install 
	  npm run dev

- بنكتب الامر التالي  **livewire** اذا بدنا نثبت دعم ل 
- **components** هاد شي الو علاقة بال 
> php artisan vendor:publish --tag=jetstream-views



- **Config/ fortify.php** اذا اردنا تعطيل او تفعيل ميزة معينة بنروح عالملف 
>

		'features' => [  
	  //Features::registration(),  
	  Features::resetPasswords(),  
	  // Features::emailVerification(),  
	  Features::updateProfileInformation(),  
	  Features::updatePasswords(),  
	  Features::twoFactorAuthentication([  
	        'confirm' => true,  
			'confirmPassword' => true,  
	  // 'window' => 0,  
    ]),],


# Middleware

Middleware Site : https://laravel.com/docs/9.x/middleware

## الوظيفة وطريقة الانشاء

-  هي القيام بعملية الحماية **Middleware** مهمة ال
- بحيث يتحقق من المستخدمين ويتحكم في اعطاء صلاحيات الدخول

- **Middleware** كود انشاء 
> php artisan make:middleware CheckUser

-  كي يستطيع  الوصول لكامل المشروع  **kernel.php** يتوجب علينا تعريفه في ملف  **Middleware** بعد انشاء ال

> \App\Http\kernel.php	 // *kernel.php** مسار ملف 

- واضافته الى باقي المسارات **protected $routeMiddleware** يتم تعريفه بالتوجه الى دالة 

>

	protected $routeMiddleware = [  
	  'check_user' => \App\Http\Middleware\ChekUser::class,  
	];
	

## كيفية العمل 
-  يمكننا البدا استعماله**kernel.php** وتعريفه في ملف ال **Middleware** بعد انشاء ملف ال

### **Middleware** الخطوات اللازمة لعمل ال 

1. نقوم بانشاء عمود في جدول قاعدة البيانات الغرض منه تحديد حالة المستخدم كما المثال التالي 
>

	Schema::create('users', function (Blueprint $table) {  
	  . //باقي الجدوال
	  . //باقي الجدوال
	  $table->integer('status')->default(1);  
	  . //باقي الجدوال
	  . //باقي الجدوال
	});

2.  وكتابة دالة تحوي ما نريد من شروط **middelware**  نقوم بالدخول الى ملف ال **migration** بعد عمل ال

>

	public function handle(Request $request, Closure $next)  
	{  
	    if (!auth()->user()->status == 1){  
	        return response('not allow');  
	  }      
	    return $next($request);  
	}


3. في الراوت  **middelware**  استدعاء ال 
- الطريقة البسيطة في حال كان عدد الراوتات قليل

> 

	Route::get('posts',[\App\Http\Controllers\PostController::class,'index'])  
		  ->middleware('check_user');

-   **Middleware** وبداخل الجروب نعرف كذا **group** في حال كان العدد كبير فينا نعمل
>


	Route::middleware(['check_user', 'auth', '...'])->group(function (){  
	    Route::get('posts',[\App\Http\Controllers\PostController::class,'index']);  
	    ....
	    ....
	    ....
	});

-   داخل الدالة الثابتة **Controller** في ال **Middleware** يمكن ايضا تعريف ال 

> 
	//هدول كلهم امثلة غير حقيقة يعني مجرد بس اعرف كيف بتنكتب الامور
	// طريقة كتابة
	public function __construct()
	{
	      $this->middleware('check_user');
	      $this->middleware('auth');
	}
	
	// طريقة كتابة 

	public function __construct()
	{
	      $this->middleware(['auth', 'admin']);
	}

	//طريقة كتابة في حال بدنا نستثني شيء معين 
	$this->middleware(['auth', 'admin'], ['except' => [
	            'fooAction',
	            'barAction',
	 ]]);


# Seeder 

Seeder Site : https://laravel.com/docs/9.x/seeding#writing-seeders

- الغرض منو انو ننشا بيانات وهمية  **"بشكل يدوي"** تروح على قاعدة البيانات بدون الحاجة لانشاء فورم 

- **Seeder** كود انشاء 
>php artisan make:seeder UserSeeder

 -  يمكننا ادخال البيانات مثل المثال الاتي **Seeder** بعد انشاء   
 -  **truncate()**  ملاحظة اذا اردنا ان يتم تصفير البيانات واعادة العد من الصفر يجب كتابة دالة 

>

	public function run()  
	{  
	  
	  User::truncate();  //دالة التصفير 
	  
	  User::create([  
	       'name' => 'samir',  
	  'email' => 'asdas@gmail.com',  
	  'password' => '12345678'  
	  ]);
	}

- بعد كتابة البيانات يتوجب علينا ارسال البيانات عن طريق الاكواد التالي 

- **class**  كود ارسال البيانات حسب  
> php artisan db:seed --class=UserSeeder

-  **class** سوف يكون الامر صعبا عن طريق كود ال **Seeder** اذا اردنا ارسال العديد من ال 
-  **DatabaseSeeder** في **Seeder** لذلك يمكننا تعريف ال  
- **ملاحظة مهمة جدا في حال كان في اكثر من جدول ومربوطين ببعض يجب الانتباه للترتيب**

>

	$this->call([  
	 //PostSeeder::class,// للمثال فقط : هذا لا يمكن يجب الانتباه للترتيب
	    UserSeeder::class,  
	]);

-  يمكننا تشغليها  جميعا بشكل جماعي **Seeder** بعد تعريف جميع 
- **class**  كود ارسال جميع  البيانات بدون   
> php artisan db:seed 


# Tinker
- الغرض منو ادخال البيانات بشكل يدوي عن طريق الاوامر
- مالو كتير اهمية بس طريقة الكود ممكن تكون كالتالي 
>

	User::create(['name' => 'MK', 'email'=> 'MK@yahoo.com', 'password' => '12345678']);

- new class او عن طريق نمط 


# Factory

Factory Site : https://laravel.com/docs/9.x/database-testing#model-factories

- الغرض منو انو ننشا بيانات وهمية  **"بشكل اوتواماتيكي"** تروح على قاعدة البيانات بدون الحاجة لانشاء فورم 
- يساعدنا في انشاء اعداد ضخمة من البيانات بشكل سهل 


-  **DatabaseSeeder**  بطريقيتين **factory** يمكننا انشاء 

## 1.  **DatabaseSeeder** ثم استدعائه في **factory** عن طريق انشاء ملف 

- **factory** كود انشاء 
- --model : يستخدم وقت يكون اسم الموديل مختلف مشان يربطهم ببعض
> php artisan make:factory PostFactory --model=Post



- **fake** بالاعتماد على مكتبة  **factory** تتم كتابة الاوامر داخل ملف ال 

>

	public function definition()  
	{  
	    return [  
	        'title' => fake()->title(),  
		    'body' =>  fake()->text()  
	    ];  
	}

-   **DatabaseSeeder** يتم استدعائها في ملف **factory** بعد كتابة الاوامر في ال 

>

	\App\Models\Post::factory(20)->create();

	
 ## 2.  فورا **DatabaseSeeder** في ملف ال  **factory**  عن طريق كتابة ال
 
- بالطريقة التالية **DatabaseSeeder** تتم كتابة الاوامر في ملف 

>

	\App\Models\Post::factory(10)->create([  
	    'title' => fake()->title(),  
	    'body' => fake()->text(),  
	])


# Mail

Mail Site : https://laravel.com/docs/9.x/mail

- بهي الفقرة رح يتم التعامل مع الايميلات وكلشيء بيتعلق فيها 

## Mailgun : 
- اول شيء قمنا بالدخول على الموقع وعمل حساب جديد
- بعدها قمنا بتثبيت وتفعيل الميزة عن طريق الخطوات التالية 



### 1. قمنا بتثبيت الحزمة عن طريق الكود التالي 
> composer require symfony/mailgun-mailer symfony/http-client

#

### 2. اللازمة **env**  قمنا بالدخول للملف الموجود بالمسار التالي ونسخنا اسماء مفاتيح  
> Config/services.php
	'domain' => env('MAILGUN_DOMAIN'),  
	'secret' => env('MAILGUN_SECRET'),

#

### 3.  ووضع المعلومات اللازمة **env** بعد ذلك قمنا بلصق اسماء المفاتيح في ملف ال 
- **ملاحظة مهمة بهاد الملف يجب الانتباه انو ما يكون في  مسافة بين الكلمات والاشارات مشان يشتغل**

>MAILGUN_DOMAIN=sandbox1f149000d6cf4390aafe5bf079e4acb5.mailgun.org  
  MAILGUN_SECRET=8c9f077ea483143ad0fabc27d731c97c-bdb2c8b4-1b751689

-  MAIL_MAILER ايضا يجب تغيير اسم ال 
> MAIL_MAILER=mailgun

- وحذف هدول لانو نحنا رح نحددهم بعدين بالرقم 4
> MAIL_FROM_ADDRESS="hello@example.com"  
    MAIL_FROM_NAME="${APP_NAME}"

#

### 4. قمنا بالدخول على الملف بالمسار التالي ووضع القيم الافتراضية للايميل واسم المرسل 

> Config/mail.php

	'from' => [  
	  'address' => env('MAIL_FROM_ADDRESS', 'mk@laravel.net'),  // ايميل المرسل
	  'name' => env('MAIL_FROM_NAME', 'MKLeL'),  //اسم المرسل
	],


-  **Markdown Mail Send** و **Normal Mail Send** بعد ذلك يمكن القيام بباقي الخطوات عن طريق طريقتي 


## 1. Normal Mail Send

-  او غيرو مفعلة **Mailgun** يجب الانتباه قبل البدا انو جميع وظائف ال
- هي الطريقة بنرسل من خلالها ايميل نصي بدون شكل جميل بس مجرد رسالة 

### 1.  عن طريق الامر التالي  Mail  قمنا بانشاء ملف 

> php artisan make:mail TestMail

#

### 2.  يجب علينا ان نعرف صفحة محتوى الايميل Mail داخل ملف ال  

-   **views** نقوم بانشاء ملف للمحتوى المراد عرضه عند ارسال الايميل في ملف ال 
- ثم نستدعي اسم الملف هنا 

>

	public function content()  
	{  
	    return new Content(  
		    view: 'emails.test',  //views اسم صفحة ال 
	  );  
	}

#

### 3.   Route ونضع اكواد الايميل داخل دالة ونستدعيه من ال  Controller ننشا ملف  
- **Mail** نقوم بوضع الايميل المراد ارسال اليه واسم ملف ال  **Controller** طبعا في 

>
	
	// Controller
	public function MailSend(){  
				//الايميل او الاشخاص المرسل لهم 
	    Mail::to('mahmodomar61@gmail.com')->send(new TestMail());  
		                                   // mail اسم ملف ال 
		                                   
		return response('sending');
	}
	

	//Route 
	Route::get('send',[MailTestController::class,'mailSend']);


## 2. Markdown Mail Send

-  او غيرو مفعلة **Mailgun** يجب الانتباه قبل البدا انو جميع وظائف ال
- هي الطريقة يمكن من خلالها ارسال الايميلات بشكل اجمل 

### 1.  عن طريق الكود التاليMarkdown نقوم بانشاء ملف ال
-  مع اسم المجلد الذي سوف تنشا فيه**view**في نهاية  الكود قمنا بكتابة اسم صفحة العرض 

> php artisan make:mail MarkMail --markdown=emails.markMail


### 2.  لا يجب علينا ان نعرف صفحة محتوى الايميل   Mail داخل ملف ال  
-  يقوم بانشاء صفحة عرض بشكل اتوماتيكي**Markdown** في ال 
- لاننا قمنا بكتابة اسم الصفحة اثناء كتابة كود الانشاء 

### 3. Route ونضع اكواد الايميل داخل دالة ونستدعيه من ال  Controller ننشا ملف  

>

	//Controller 
	public function mailSendMark(){  
	
	    Mail::to('mahmodomar61@gmail.com')->send(new MarkMail());  
	  
	 return response('sending');  
	}

	// Route 
	Route::get('send/mark',[MarkMailController::class,'mailSendMark']);


## 3. Email Verification

-  او غيرو مفعلة **Mailgun** يجب الانتباه قبل البدا انو جميع وظائف ال
- هي الميزة مشان ارسال ايميل التحقق 
- لتفعيل الميزة نتبع الخطوات التالية 

1.   يلي بدنا عن طريقو نتحقق ونعمل اضافة للميزة **Model** ندخل على ال 

>
		
	class User extends Authenticatable //// implements MustVerifyEmail ////


2.  **Route** بنتاكد انو ضايفين الميزة عليه غالبا بكون بال  **Middelware**  بنروح على مكان وجود ال 

>

	Route::get('/dashboard', function () {  
	    return view('dashboard');  
	})->middleware(['auth', /////   'verified'  /////])->name('dashboard');

- بنروح عالملف بالمسار التالي  **Middelware** ملاحظة : في حال بدنا نصل لكل خصائص ال  
> App\Http\kernel.php


## 4. Forgot Password 

- او غيرو وفعلنا كلشي بشكل صحيح **Mailgun**  اذا كنا عاملين جميع الخطوات لتفعيل ال 
- هي الميزة بتشتغل لحالها بدون اي مشاكل 




# Events 

Events Site : https://laravel.com/docs/9.x/events

- وظيفته الاساسية هي عمل حدث بناء على حدث اخر 
- مثال عليه في حال تم بيع منتج بعدد معين نقص من المستودع عدد القطع
- مثال اخر في حال شخص عمل تسجيل حساب ارسل له ايميل ترحيب  

## 1. Built-in Events

- هدول خصائص موفرين بلارافيل نفسو 
- **Event**خطوات تشغيل ال  

### 1. Mailgun التاكد من تزبيط اعدادت ال 

- **Mail**  داخل ال **Mailgun**  مشان ما عيد الكتابة الخطوات ال4 موجودة بفقرة ال 

#

### 2. Markdown Mail انشاء ملف 

- يتم الانشاء عن طريق الكود التالي 
> php artisan make:mail WelcomeUser --markdown=emails.welcome

- **Mail**  داخل ال  **Markdown Mail Send** لمزيد من التفاصيل فينك تروح على فقرة 

#

### 3.  التي تحوي شكل الرسالة المبعوتةwelcome عدلنا على صفحة ال 

- قمنا بكتابة متغير سوف يحوي اسم المستخدم المسجل مثل المثال التالي 

>

	<x-mail::message>  
	Hi : {{$user->name}}  
	  
	<h2>مرحبا بك معنا</h2>

#

### 4.  وتعريف متغير اسم المستخدم Mail قمنا بالدخول الى ملف ال 
>
	// اول شي عرفنا المتغير
	public $user;  
  
	// بعدين عرفناه بالدالة البانية
	public function __construct($user)  
	{  
	    $this->user = $user;  
	}

#

### 5. Event بنقوم بتعريف  ال 

- نقوم بالدخول الى الملف في المسار التالي  **Event** لتعريف ال 

> App/Providers/AppServiceProvider.php

-  مع الانتباه الى كيفية كتابة اسم المتغير **boot()** داخل دالة ال   **Event** بعد الدخول للملف نقوم بكتابة ال
>

	public function boot()  
	{  
	    User::created(function ($user){  
	        Mail::to($user)->send(new WelcomeUser($user));  
	  });  
	}


## 2. Custom Events

- يمكننا من خلاله انشاء العملية التي نريد  **Listener** و **Event** نقوم هنا بانشاء 
- يعني يعمل كوسيط **Listener** انه يقوم باستقبال البيانات وارسالها الى **Event** وظيفة ال
- انه يقوم بارسال الشيء المراد عمله الى المستخدم **Listener** وظيفة ال 

- ### طرق الانشاء  

### 1. artisan عن طريق اكواد 

- **Event** كود انشاء 
 > php artisan make:event WelcomeUser

- **Listener** كود انشاء 
> php artisan make:listener SendEmailWelcomeUser --event=WelcomeUser

#

### 2. EventServiceProvider  عن طريق ملف 
- يوجد الملف في المسار التالي 

> App/Providers/EventServiceProvider.php

-   كالتالي **Listener** و  **Event** بعد الدخوال الى الملف نعرف ال
>
		
	//هدول فوق 
	use App\Events\WelcomeUser;  
	use App\Listeners\SendEmailWelcomeUser;

	// هدول تحت 
	protected $listen = [
		WelcomeUser::class => [  
		    SendEmailWelcomeUser::class  
	],
    ];

- بعد كتابة الاوامر نقوم بكتابة الكود التالي لانشاء الملفات 
> php artisan event:generate



## بعد اتمام عملية الانشاء نقوم بالخطوات التالية

### 1.  Controller الخاص بنا في ملف ال Event  نقوم بتعريف ال 

- في هذه المثال قمنا بالدخول الى المسار 

> App/Http/Controllers/Auth/RegisteredUserController.php

-   الموجود وتعريف الذي قمنا بانشاءه  **event** ثم قمنا بحذف ال 
- مشان نعمل تحقق من ان كان المستخدم موجود او لا **if**  كتبنا ال 
>
	
	if ($user){  
    event(new WelcomeUser($user));  
    }

### 2. Event  نقوم بتمرير المتغير في ملف ال 

- نقوم اولا بتعريف المتغير قم تمريره في الدالة البانية

>


	public $user;  
	  
	public function __construct($user)  
	{  
	    $this->user = $user;  
	}


### 3. Listener نقوم بانشاء العملية التي نريد داخل ال  


>

	// كتبت المسارات مشان فرق بيناتهم لانو نفس الاسم 
	public function handle(\App\Events\WelcomeUser $event)  
	{  
	    Mail::to($event->user->email)->send(new \App\Mail\WelcomeUser($event->user));  
	}

- لا يقتصر على ارسال ايميلات في كتير اشياء تانية ممكن نعملها مثل  **Event** ملاحظة رد للتذكير عمل ال  
- ....اذا سجل مستخدم عملي الحالة تبعو واحد الخ


# Notification 

Notification  Site : https://laravel.com/docs/9.x/notifications

- الغرض منها ارسال اشعارات للمستخدم ولها عدة اشكال كرسائل ايميل او هاتف او عن طريق الداتا بيس 

- نحنا هون حنستخدمها عن طريق الداتا بيس للسهولة  ولعدم الاحتياج لمواقع خارجية


## Notification Database مثال بالخطوات عن كيفية الانشاء مع ال 


### 1. Database في ال  Notification نقوم بانشاء جدول ال 

-    للاستخدام عن طريق الداتا بيس **Notification**  كود انشاء جدول  

> php artisan notifications:table

### 2. قمنا بتثبيت نظام تسجيل دخول 

### 3. زبطنا الامور تبع يلي متل العادة كونترولر وموديل الخ 

### 4. Notification نقوم بانشاء 

-   **Notification**  كود انشاء   

> php artisan make:notification CreatePost

### 5.   و التعديل عليه **Notification** قمنا بالدخول على ملف ال 

- الملف موجود بالمسار التالي

> App/Http/Notifications/CreatePost.php

- مسحنا الملفات الافتراضية الغير لازمة لانو محدد افتراضي انو نمط الارسال عن طريق ايميل 

- بعدها حطينا نمط الاشعارات يلي حنستخدموا داخل الدالة التالية 
>

	public function via($notifiable)  
	{  
	    return ['database'];  //فينا نحدد كذا نوع سوا
	}

### 6.  وتعريف الدالة ولمن يتم الارسال  Controller قمنا بالدخول ال 

1. قمنا اول شي باستدعاء البينات ووضعها في متغير مشان تسهل علينا الامور
2. ساوينا متغير بيحوي شرط اظهار المنشورات لمين مثل هون بيظهر عند الكل الا صاحب المنشور
3. ساوينا متغير الغرض منو ناخد اسم الكاتب مشان نعرضو بالاشعار 
4. بس مشان تكمل الصفة الجميلة**Notification** ساوينا متغير فينا ما نساويه ونحط فورا بامر ال 
5. **Notification** عرفنا المتغيرات داخلو ومنين رح ياخد الاوامر تبعو يعني من ملف ال 

>
	
	public function store(Request $request)  
	{  
	//1.
	    $post = Post::create([  
	        'title' => $request->title,  
			'body' => $request->body  
	  ]);  
	  
	//2.
	  $users = User::where('id', '!=' , auth()->user()->id)->get();  
	  
	//3. 
	$created_by = auth()->user()->name;

	//4.
	$title = $post->title;

	//5.  
	Notification::send($users,new CreatePost($post->id,$created_by,$post->title));  


	return redirect()->route('dashboard');
    }




### 7. Notification تعريف المتغيرات داخل ملف ال 

- ولا ننسى اضافتهم للدالة البانية  **Notification** بنعرف المتغيرات جوات ملف ال 

>
	
	private $post_id;  
	private $created_by;  
	private $title;
	
	public function __construct($post_id, $created_by,$title)  
	{  
	  $this->post_id = $post_id;  
	  $this->created_by = $created_by;  
	  $this->title = $title;
	}


### 8. Notification تعريف كل جدول وين حيروح بالداتا بيس بملف ال 

- toArray  نقوم بكتابة الاوامر داخل دالة 
- نفس الشيء toDatabase او ممكن تكون  toArray هي الدالة ممكن نكتب 

>

	
	public function toArray($notifiable)  
	{  
	    return [  
	        'post_id' => $this->post_id,  
	        'created_by' => $this->created_by,
	        'title' => $this->title  
	  ];  
	}

-  وبتنحط كمصفوفة data يلي اسمو column هي المعلومات كلها بتروح لل



## Notification Database كيفية عرض 

### - طبعا شغلنا هون حيكون كلو داخل ملف العرض تبع الاشعارات
### - : وقمنا بادخال الاكواد التالية
1. كود يحضر لنا عدد الاشعارات الموجودة
2. كود يحضر لنا اسم الحساب صاحب المنشور
3. title كود يحضر لنا 
4. created_at كود يحضر لنا 
- **Notification** طبعا كلشي هون عم ناخدوا من جدول ال 

>

	//1.
	<span>Notifications ({{Auth::User()->unreadNotifications->count()}}) </span>

	
	@foreach(Auth::User()->unreadNotifications as $notification)  
	<li class="notification-box">  
	 <div class="row">  
	 <div class="col-lg-3 col-sm-3 col-3 text-center">  
	 <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">  
	 </div> <div class="col-lg-8 col-sm-8 col-8"> 
	 
	//2.
	<strong class="text-info">{{$notification->data['created_by']}}</strong>  
	 
	//3.
	 <div>  
	 {{$notification->data['title']}}  
	</div>  
	
	//4.         
	<small class="text-warning">{{$notification->created_at}}</small>  
	</div> </div></li>  
	@endforeach



## Mark Read at One كيفية تفعيل ميزة المنشور المقروء 

### -  الغرض من هذه الميزة انني اذا ضغطت على عنوان المنشور وتمت قرائته يتم حذفه من قائمة الاشعارات 

### - يمكننا التعامل مع هذه الميزة عن طريق الخطوات التالية 

1. كرابط يمكننا الضغط عليه title جعل  

-  لانو بيلزمو ليتشتغل المسار  id طبعا هون مررنالو ال 

>
		
	<a href="{{route('posts.show',$notification->data['post_id'])}}">{{$notification->data['title']}}</a>

2. **Controller** كتابة اوامر الاستدعاء وتنفيذ القراءة في 
- لانو فاضية مو لسبب تاني  **show** هون اخترانا دالة

>

	public function show($id)  // id مررنا ال 
	{  
	// هاد الامر مشان ايجاد الاي دي تبع المنشور
	$post = Post::findOrFail($id);  
	   
	//تبع الاشعار  uuid  هاد الكود عن طريقة قمنا بانشاء متغير شغلتو يجبلنا ال 
	$getNotID = DB::table('notifications')->where('data->post_id',$id)->pluck('id');  

	//  وبعدها يقوم بتغير حالة القراءة uuid هاد الكود شغلتو انو يتحقق من صحة ال 
	DB::table('notifications')->where('id',$getNotID)->update(['read_at'=>now()]);  
	
	return $post;  
	}



## Mark Read at All كيفية تفعيل ميزة المنشورات المقروءة 

### الغرض من هذه الميزة انو يتم قراءة جميع الاشعارات بكبسة واحدة 


1. اول شي ساوينا راوت 
>

	Route::get('MarkAll',[PostController::class,'markAsRead'])->name('MarkAll.Read');

2.   دخلنا على ملف العرض وغيرنا مسار الكبسة 

>

	<a href="{{route('MarkAll.Read')}}" >Mark all as read</a>

3. **Controller** انشانا دالة وكتبنا فيها الاوامر بال 

>

	public function markAsRead(){  
	
	// للوصول الى ايدي المستخدم
	$user = User::find(auth()->user()->id);  
	  
	foreach ($user->unreadNotifications as $notification){  
	        $notification->markAsRead();  
	 }  
	  
	    return redirect()->back();  
	}


# Trait

- الغرض منو انشاء دالة معينة لاستخدامها في عدة اماكن وعدم تكرار الكود

## Trait مثال على خطوات عمل ال 
1. **php class** مع الانتباه اثناء الانشاء اننا ننشئ ملف **Trait** نقوم بانشاء مجلد داخل المسار التالي وننشا فيه ملف 

> App/Traits/TestTrait.php

2.  **Route** وزبطنا امور ال **Controller**  انشانا 

3. وخليناه يعمل 50 مستخدم **Seeder** فتنا عال 

4.   مع جدول وكتبنا بالجدول كم منشور **Post Model**  انشانا 

5.  وقمنا بتعريف الدالة داخله **Trait** الان بدا الشغل الحقيقي دخلنا على  ملف ال 

- انشانا دالة بسيطة الغرض منها جلب البيانات من الداتا بيس 

>

	public function getData($model){  
	    return $model::all();  
	}

6. **Controller**  نستدعي هذه الدالة دخل ال 
	-  **Controller** داخل ال **Trait**  اول شيء قمنا بتعريف ملف ال  
	- بعدها قمنا باستدعاء الدالة وفي طريقتين للكتابة كالتالي 
	
>

	class TestController extends Controller  
	{  
	    use TestTrait;

	  public function index(){  

	  $users = $this->getData(User::class);  // class 
	 return $users;  
	  
	  $posts = $this->getData(new Post());  // new 
	 return $posts;  
	  }
	}

7-  **Scops** فينا نستدخدمها كمان بشكل فعال مع ال 


# Helper Function
 Helper Function Site : https://laravel.com/docs/9.x/helpers
 
 Helper Function Create : https://laravel-news.com/creating-helpers

- وظيفتها انو من خلالها نستطيع انشاء دوال في ملف واحد واستدعائها في اي مكان في المشروع

## Helper Function  خطوات عمل 

1.  في احد المسارين التاليين **helper** نقوم بانشاء ملف ال 

> App/helpers.php
   App/Http/helpers.php

2.  **Autoloading** يجب تعريف الملف في المشروع كاملا عن طريق عملية اسمها 
-  و نضيف عليه اسم الملف في الدالة التالية **composer.json** نقوم بالذهاب الى ملف 

>

	"autoload": {  
    "files": [  
        "app/helpers.php"  
	],}

3. **composer** نكتب الكود التالي لاعادة تشغيل ال 

> composer dump-autoload

4. **helpers.php**  نقوم بكتابة الدالة داخل ملف ال 

- الغرض منها تاكيد عدم وجود دالة تانية متل هالاسم **if** اولا كتبنا دالة 
- نقوم بكتابة ما نريد داخلها 

>
	
	if (! function_exists('userName')) {  
	    function userName(){  
	        return Auth::User()->name;  
	  }  
	}

	if (! function_exists('userId')){  
	    function userId(){  
        return Auth::User()->id;  
	  } 
	}

5. الان اصبح بامكاننا استدعاء الدالة في اي مكان
- امثلة 

>

	//	Controller
	public function index(){  
	  
	$user = User::where('id',userId())->get();  
	return $user;  
	} 

	//Blade 
	You're logged in! : {{userName()}}  
	You're logged in! : {{userId()}}



# Queues

Queues Site : https://laravel.com/docs/9.x/queues

- الغرض من هذه الميزة انها تكون وسيط اثناء تنفيذ عملية تحتاج معالجة ووقت كبير 
- بحيث انها تقوم بانجاز المهمة بدون الانتظار او التاثير على عمل السيرفر

## Queues مثال على خطوات العمل على ال 

### 1. الانشاء 

1. نقوم اولا بانشاء جدول خاص بها في الداتا بيس عن طريق الكود التالي **Queue** من اجل انشاء 

> php artisan queue:table

2. نكتب امر التهجير 

> php artisan migrate

3. **env** نقوم بالتعديل على ملف ال 

> QUEUE_CONNECTION=database

#

### 2.   مع الداتا بيس Queue  مثال لاستعمال ال 

1. **Users** قمنا بانشاء عمود في جدول ال 

>
	
	$table->integer('status');


2. بقلب الموديل **fillable** ضفناه على ال 

3. وخليناه ياخد قيم  معينة **UserFactory**  ضفنا السطر التالي داخل ملف 

>
	 
	'status'=> fake()->randomElement([0,1]),

4.   و فعلنا الفاكتوري **DatabaseSeeder** رحنا على ملف 

>

	\App\Models\User::factory(1000)->create();

5. **Route** و  **Controller**  ساوينا 

6. **Queue** كتبنا اوامر تحديث الحالة بالطريقة العادية وطريقة ال 

#### 1. الطريقة العادية في التحديث 

 -  **Controller**  كتبنا امر تحويل الحالة من  صفر لواحد في ال 

- اثناء حدوث هي العملية نلاحظ البطئ في الاداء وتوقف السيرفر لحين انهاء العملية كاملة

> 
	
	public function index(){  
	$user_ids = User::where('status',0)->pluck('id');  
	  
	foreach ($user_ids as $ids){  
	  
	        User::where('id',$ids)->update([  
	           'status' => 1  
    ]);  
    }  
	    return 'Users Update';  
	}


#### 2. Queue طريقة ال 

1.   عن طريق الكود التالي **job** قمنا بانشاء

> php artisan make:job ActiveUsersJob

2. **handle** نقوم بكتابة الكود في دالة ال 

	   public function handle()  
	   {  
	   $user_ids = User::where('status',0)->pluck('id');  
		  
	   foreach ($user_ids as $ids){  
		  
		    User::where('id',$ids)->update([  
		            'status' => 1  
	   ]);  
	   }}
		

3. **Controller** في ال  **job** نقوم باستدعاء ال 

- فينا نضيف مدة بحيث انو يتم تنفيذ الامر بعد الضغط بعدد ثواني معين

	   public function index(){  
		  
		 ActiveUsersJob::dispatch()->delay(now()->second(5));
		 return 'sending data  to database';  
	   }

4. عن طريق الكود التالي**Queue** نقوم بتشغيل ال 

> php artisan queue:work

-    **job** و استدعائه في الدالة البانية لل **Controller** ملاحظة يمكن وضع المتغير للشرط في ال 
- رح اشتغل المثال الجاية عليه 

#

### 3. مثال تغيير حالة المستخدم 

1. **Mailgun** قمنا بتزبيط اعدادات ال 

2.  **Mail Markdown** انشانا ملف 

3. عدلنا بملف العرض تبع الرسالة 

4. **Route** و ال  **Controller** زبطنا امور ال 

5. عن طريق الكود التالي  **job** انشانا 

> php artisan make:job SendMailJob 

6. **job** و  **Controller** كتبنا الاوامر اللازمة داخل ال 

>

	//Controller
	public function sendMail(){  
	 $data=['mahmodomar61@gmail.com','mahmodomar61@gmail.com',];  
	 
	  SendMailJob::dispatch($data);  
	  
	 return 'the mail send loading';  
	}

	//Job
	private $data;  
	public function __construct($data){  
	    $this->data = $data;  
	}  
	public function handle()  
	{  
	  $data = $this->data;  
	 foreach ($data as $email){  
	        Mail::to($email)->send(new SendMailUsers());  
	 } } 
	  


# File Storage

 File Storage :https://laravel.com/docs/9.x/filesystem

- يستخدم للتعامل مع الملفات ومسارات الملفات

 ## File Storage خطوات العمل مع ميزة 
 
### 1. **Route**  في المكان اللازم له هون للسرعة كتبناه بال **Storage** نقوم بكتابة امر التعامل مع ال  
- **storage** : هاد الصنف المسؤول عن عمل العملية
- **disk** : هي الدالة المسؤولة عن تحديد مسار الملف 
- **put** : هي الدالة المسؤولة عن انشاء الملف المراد عمله

>

	Storage::disk('local')->put('example.txt', 'Contents');

### 2 . يمكننا تحديد مسار الملف بالدخول الى الملف التالي واستدعاء مسار معين او انشاء مسار جديد

- مكان وجود الملف 

>Config/filesystems.php


### 3 . حالات استخدام المسارات

- مافي حالة احسن من حالة كل حدا بيشتغل شي 

 1.  **storage** انشاء الملفات داخل ملف ال 

>

	//function
	Storage::disk('local')->put('example.txt', 'Contents');

	//path
	'local' => [  
	    'driver' => 'local',  
	    'root' => storage_path('app'),  // يمكن تغيير مكان مسار الملف من هون 
	    'throw' => false,  
	],

	// المسار 
	storage/app/example.txt


 2.  **public** و داخل ال  **storage** انشاء الملفات داخل ال 

- اولا يجب كتابة الكود التالي 
> php artisan

- الان نقوم بكتابة الدالة واستدعاء المسارات  

>

	//function
	Storage::disk('public')->put('example.txt', 'Contents');

	//path
	'public' => [  
	  'driver' => 'local',  
	  'root' => storage_path('app/public'),  
	  'url' => env('APP_URL').'/storage',  
	  'visibility' => 'public',  
	  'throw' => false,  
	],

	//المسارات
	public/storage/example.txt
	storage/app/public/example.txt

3. انشاء المسار في المكان الذي نريده 
-   ونكتب المسار الجديد ثم نستدعيه **filesystems** اولا نقوم بالدخول الى ملف 

>

	//function 
	Storage::disk('samir')->put('example.txt', 'Contents');

	// path
	'samir' => [  
	  'driver' => 'local',  
	  'root' => public_path('images'),  
	  'url' => env('APP_URL').'/storage',  
	  'visibility' => 'public',  
	  'throw' => false,  
	],

	// المسار 
	public/images/example.txt

## مثال رفع الصور على السيرفر

- **form** هاد المثال يحتوي الطريقة التي يتم من خلالها عمل ملف ليتم رفع الصور عليه عن طريق 

### :  خطوات العمل 

1.  **form** قمنا بانشاء صفحة عرض تحوي

2.  وزبطنا الامور  **Controller** و **Route** قمنا بانشاء  

>
		
	//form
	<form action="{{route('photo.save')}}" method="POST" enctype="multipart/form-data">  
	  @csrf  
	  <input type="file" name="photo">  
	 <button type="submit">Submit</button>  
	</form>


	//Route 
	Route::get('show',[UploadImage::class,'showForm']);  
	Route::post('store',[UploadImage::class,'store'])->name('photo.save');


	//Controller 
	public function showForm(){  
	    return view('upload');  
	}  
	  
	public function store(Request $request){  
	//الامر التالي بجبلنا اسم الصورة 
	// file: يلي موجود بالفورم input هاد مشان يجيب الملف من اسم ال 
	// getClientOriginalName(): بدونو بيجي اسم المسار مو اسم الصورة  
	$image = $request->file('photo')->getClientOriginalName();  

	//هاد الامر مشان حفظ الصورة بالملف 
	
	// الطريقة الاولى يتم فيها تشفير الاسماء 
	// file :  input  اسم ال
	// store : الدالة يلي عن طريقها بتم عملية التخزين 
	// هي الدالة مشكلتها انو بتشفر اسماء الصور 
	// بالفراغ الاول بنكتب اسم الملف يلي حينشا وينحط فيه الصور
	// بالفراغ التاني اسم المساريلي انشاناه  يلي مكتوب بملف المسارات 
	$path = $request->file('photo')->store('users','samir');

	
	//الطريقة الثانية يتم اضافة الصورة باسمها الصحيح 
	// storeAs : الدالة يلي عن طريقها بتم عملية التخزين 
	// بالفراغ الاول بنكتب اسم الملف يلي حينشا وينحط فيه الصور
	// بالفراغ التاني كتبنا اسم المتغير يلي بجبلنا اسم الصورة
	// بالفراغ التالت اسم المساريلي انشاناه  يلي مكتوب بملف المسارات 
	$path = $request->file('photo')->storeAs( 'users',$image ,'samir');

	 return $path;  
	}

- الخ **posts**و  **users** بالطريقة يلي فوق في حال بدنا ننشا ملفات لاكثر من غرض مثل ملف لل 
-  **trait** رح نضطر نكرر الكود اكتر من مرة لهيك فينا نستخدم طريقة ال

3. **trait**عمل العملية السابقة باستخدام ال 
-  **Trait** قمنا بانشاء مجلد
- **Trait** قمنا بانشاء ملف 
-  ولصقها هنا **Controller** داخل الملف قمنا باخذ التعلميات من ال 
- ننظر الى الشيء المتغير في الدالة حينما نريد استدعائها نجد هنا ان الذي يتغير هو اسم المجلد
- كي يستقبل منا اسم المجلد **parameter**  بعد ذلك قمنا باضافة 

>
	
	//trait
	public  function UploadImage(Request $request, $folderName){  
	 $image = $request->file('photo')->getClientOriginalName();  
	 $path = $request->file('photo')->storeAs( $folderName,$image ,'samir');  
	 return $path;  
	}

- **Controller**  بال **trait** بعد ذلك استدعينا ال 

>

	//Controller 
	use UploadImageTrait;
	
	public function store(Request $request){  
  
        return $this->UploadImage($request,'users');
    }


## مثال رفع الصور على السيرفر والداتا بيس

1. مع ملف جدول الداتا بيس **Model** انشانا 

2. قمنا باضافة عمود في الجدول 

>

	$table->string('path');

3.  **fillable** فتنا عالموديل وزبطنا امور ال 

4. **Controller**زبطنا الامور بال 

>
	
	$path =  $this->UploadImage($request,'users');  
	Image::create([  
	    'path' => $path  
	]);  
	  
	return 'Upload Ok';


## Blade عرض الصور في  

1.  وزبطنا الامور  **Controller** و **Route** قمنا بانشاء  

>


	//Controller 
		public function index(){  
		        $images = Image::all();  
		 return view('index',compact('images'));  
		  }	}

	//Route
	Route::get('show/image',[UploadImage::class,'index']);

	//blade view
	<table class="table">  
	 <thead> <tr> <th scope="col">#</th>  
	 <th scope="col">path</th>  
	 </tr> </thead> <tbody>  @foreach($images as $image )  
	  <tr>  
	 <th scope="row">{{$image->id}}</th> 
	 // هاد السطر المهم لاستدعاء الصورة من الداتا بيس 
	 <td><img src="{{asset('images/' . $image->path)}}" width="20px" height="20px"></td>  
	 </tr>  @endforeach  
	  </tbody>  
	</table>



# API

- **API** : application programming interface

-  شغلتها بهالحياة انو تقوم بربط الاجهزة واللغات المختلفة بقاعدة البيانات 

- مثال عليها اذا عنا موقع وبدنا نعمل عليه تطبيق 

## Route 

- **api.php** نقوم بكتابة مساره داخل ملف **api**  عند عمل 



## Controller

-  **api** خاص للتعامل مع ال **Controller**  يتم عمل 
- **view** لا يوجد عندنا  **api** يجب الانتباه الى اننا في ال 
- **response** يتم التعامل مع العرض عن طريق الامر 


## Response 
-  هي الرسالة التي سوف تظهر للمستخدم او المطور **api** من اهم الاشياء في عملية ال 
-   يجب الانتباه الى توحيد نمط الرسائل في المشروع كاملا **Response**  عند انشاء ال 
- من المتعارف عليه انه يجب ان ننشا مصفوفة تحوي المعلومات كالتالي**Response** عند التعامل مع ال
>
	
	$array = [  
	  'data' => $data,  	//'data' or 'key'
	  'message' => $message,  
	  'status' => $staus  
	];

-  يحوي دالة الرسالة  واستدعائه في باقي المشروع مثال  **Trait**  ويمكن ايضا من اجل سهولة التوحيد انشاء 

>


	//Trait
	public function apiResponse($data = null , $message = null, $staus = null){  
	  
	  $array = [  
	  'data' => $data,  
	  'message' => $message,  
	  'status' => $staus  
	  ];  
	 return response($array,$staus);  
	}

	//Controller 
	public function index(){  
	  
	$posts = Post::all();  
	  
	return $this->apiResponse($posts,'ok',200);    
	}


- ### if condition in Response

- تستخدم احيانا في حال بدنا نبعت رسالتين مختلفين بحيث اذا كان موجودة البيانات او لا 
- مثال على شرط 

>

	//Controller
	public function show($id){  
	  
	$post = Post::find($id);  
	  
	 if ($post) {  
	        return $this->apiResponse($post, 'ok', 200);  
	  }  
	    return $this->apiResponse($post, 'The post not found', 401);  
	}

	//Route
	Route::get('/posts/{id}',[PostController::class,'show']);


### Resource  And Naming in Response

- هنا يمكننا القيام بالتحكم بالبيانات التي سوف تظهر للمطور او المستخدم
- ويمكننا ايضا القيام بتغيير اسم الجدول الذي سوف يظهر من قاعدة البيانات

- ####   للقيام بذلك نتبع الخطوات التالية

1. عن طريق الامر التالي **Resource** نقوم بانشاء 
> php artisan make:resource PostResource

2. الموجود في المسار التالي **Resource** بعد الانشاء نقوم بالدخول الى ملف ال 
> App\Http\Resources\PostResource

3- **Controller** نقوم بكتابة الجداول التي نسمح بظهورها والاسم الذي نريد ثم نستدعيها بال 

- **show** و ال **index** ملاحظة يجب الانتباه الى الفرق بالاستدعاء بين دالة ال 
- للرسالة التي تاتي بعدم وجود المنشور لا تعمل هون الفقرة الجاية رح نصلحها **if** ملاحظة كمان انو شرط ال 

>

	//Resource
	public function toArray($request)  
	{  
	  return [  
	  'men smer'=>$this->id,  
	  'title'=>$this->title,  
	  'body'=>$this->body,  
	  ];}


	//Controller
	public function index(){  
	
	$posts = PostResource::collection(Post::all());  
	  
	return $this->apiResponse($posts,'ok',200);  	  
	}  
	  
	public function show($id){  
	    $post = new PostResource(Post::find($id));  
	  
	 if ($post) {  
	    return $this->apiResponse($post, 'ok', 200);    
	  }  
	    return $this->apiResponse($post, 'The post not found', 401);  
	}

- نقوم بتعديل الكود كالتالي **if**  كيفية حل مشكلة دالة ال 
>

	public function show($id){  
	  
	$post = Post::find($id);  
	  
	if ($post) {  
	    return $this->apiResponse(new PostResource($post), 'ok', 200);  
	  }  
	    return $this->apiResponse($post, 'The post not found', 401);  
	}


## Postman

- بشكل افضل واسهل **api** هي اداة نستطيع من خلالها القيام بالتعامل مع ال 

- و العمل دخلها **new collection** عند فتح البرنامج يمكننا اضافة 

- من اجل التنظيم نقوم بانشاء مجلد يحوي جميع الملفات 

- يمكننا ايضا عمل متغير لكي لا نضطر الى اعادة كتابة  الرابط كاملا كل مرة 


- كلشي موجود بملف الورد التالي 

https://docs.google.com/document/d/1ohO9jbZWFjbbeDiV0EuOAK3vPmnQ0cEi/edit?usp=sharing&ouid=116697427276974124074&rtpof=true&sd=true


## Http Requests :

**200** : 'ok' : يعبر عن انو عملية القراءة تمت بنجاح

**201** : 'Created '  يعبر عن انو عملية الكتابة تمت بشكل صحيح

**400**: 'Bad Request'  يعبر عن انو في مشكلة ما بالاتصال 

**401**: 'Unauthorized'  يعبر عن انو مافي صلاحية للدخول

**404** : 'Not Found' يعبر عن انو الصفحة غير موجودة 


# Notes 

## 1. عند استخدام عملية الحذف يجب الانتباه لنمط الارسال بحيث انه 
		-  **get** بكون نمط الارسال **link** اذا كان الارسال عن طريق 
		-  **post or delete** بكون نمط الارسال **form** اذا كان الارسال عن طريق 


##  2. بدنا يطالع ارقام عشوائية بنكتب الامر التالي **user_id** وضفنا عليه **factory** اذا اردنا  
>
	'user_id' => User::all()->random()->id,


## 3-  **enctype**  وفي بعت صور من خلالو يجب انو نضيف **form** اذا انشانا 

>

	 <form action="{{'')}}" method="POST" enctype="multipart/form-data">

 ## 4. View Composer هون عنا حالة جديدة

- الحالة هي عبارة انو نحنا بدنا نعرض الشريط الجانبي بعدد صفحات ومسارات وهاد الشي ما بصير مع الكونترولر
- لذلك في عنا حلين الحل الاول انو نكتب  متل هيك داخل ملف البليد

```
 @foreach(\App\Models\Category::all() as $category)
                {{$category->title}}
 @endforeach
```

- View Composer او عن طريق حل تاني وهو ال

 1. نقوم بالدخول الى ملف appservicesprovider.php
 2. العرض يلي بدنا ياه كالتالي boot بنعرف داخل دالة


 ```
  public function boot()
      {
          view::composer('main.sidebar',Category::class);
      }
  ```

  3. هي طريقتي انا هلا فتت على الموديل وكتبت فيه دالة العرض كالتالي

```
public function compose(View $view)
    {
        $categories = Category::all();
        return $view->with('categories',$categories);
    }
```

4. اخر شي فتت عصفحة البليد واستديته بشكل عادي
>

	@foreach($categories as $category)
	                {{$category->title}}
    @endforeach




## 5. bootstrap في حال استخدمت 
- صارت معي مشكلة انو الايقونات بالعداد كبيرة كتير وفي مشكلة بالتنسيق وانحلت كالتالي
- فتت على ملف appserviceprvider 
-  استدعيناه boot بعدين ضفنا عليه هالصنف وبدالة 
>

	use Illuminate\Pagination\Paginator;
	public function boot()  
	{  
	   // هي ضفناها لانو الايقونات عم تطلع كبيرة لانو الاصدار الجديد من لارافيل ما بيدعم بوت ستراب  
	  Paginator::useBootstrap();  
	  //SideBar View  
	  view::composer(['main.sidebar','lists.categories'],Category::class);  
	}
