# c9 install laravel 
- `composer create-project laravel/laravel blog --prefer-dist 5.1.*`
- `sudo vim /etc/apache2/sites-enabled/001-cloud9.conf`
- `mysql-ctl install`
- `mysql-ctl cli`
- `https://[workspacename]-[username].c9users.io/phpmyadmin`
- `https://backstage-wploey.c9users.io/phpmyadmin/`
- `use c9;`
- `exit;`
- 

## phpmyadmin
- `phpmyadmin-ctl install`
- 

## .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=c9
DB_USERNAME=your_cloud9_username
DB_PASSWORD=
```

## Upgrade npm and node
- `sudo npm install -g npm`
- `npm install`
- `nvm install 7.6.0`
- `nvm alias default stable` //设置默认版本
- `sudo npm install -g yarn`
- `npm rebuild node-sass`
- `npm run dev`

# git
- `git config –global user.name "wploey"`
- `git config -global user.email wploey@gmail.com`
- `git config --global core.editor vim`
- `git config --global merge.tool vimdiff`
- `git config --list`
- `cat ~/.ssh/id_rsa.pub`

- `git init`
- `git add .`
- `git commit -m 'init'`
- `git remote add origin https://github.com/wploey/name.git`
- `git push -u origin master`

- `git merge origin/master` //将origin上的master分支 merge 到当前 branch 上
- 最好先备份下当前分支
- `git push origin master`


- 查看分支
- `git branch -a`
- `git push origin master`
- 把分支推到远程分支
- `git push origin test`

- 更新
- `git fetch`
- `git merge origin`
- `git diff`
- 
## git alias
- ~/.gitconfig
- `git config --global alias.co checkout`
- `git config --global alias.st status`
- `git config --global alias.lg "log --color --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit"`
- 

## 分支
- `git branch` //查看分支
- `git branch dev`
- `git checkout dev`
- `git checkout -b dev` //创建切换到dev分支
- `git merge dev`
- `git branch -d dev` //删除分支

## 合并commit
```
git reset HEAD~5
git add .
git commit -am "Here's the bug fix that closes #28"
git push --force
```
# laravel

##lang
- `https://github.com/caouecs/Laravel-lang/`
- `=>resource/lang`
- `config/app.php`
- `'locale' => 'zh-CN'`

## blade
- @yield('content') // 占位
- @section('sidebar') // 填充
- {{ old('name') }} // 信息填写错误，页面进行重定向访问时，输入框将自动填写上最后一次输入过的数据


## elixir
- `gulp --production` //压缩
### error
- 
```
not found: notify-send
gulp-notify: [Error in notifier] Error in plugin 'gulp-notify'
```
- 解决
```
sudo apt-get update
sudo apt-get install libnotify-bin
```


## 路由
- 路由重命名
```
// as 关键字
Route::get('/hello/laravelacademy',['as'=>'academy',function(){
    return 'Hello LaravelAcademy！';
}]);

// 跳转路由方便
Route::get('/testNamedRoute',function(){
   return route('academy');
});

// 带参
Route::get('/hello/laravelacademy/{id}',['as'=>'academy',function($id){
    return 'Hello LaravelAcademy '.$id.'！';
}]);

// 测试
Route::get('/testNamedRoute',function(){
    return redirect()->route('academy',['id'=>1]);
});
```
## Session
```
$request->session()->flash('message', '欢迎访问'); //一次性数据
$request->session()->push('role', Auth::user()->role);
if($request->session()->has('role')){
    $site = $request->session()->get('role');
    dd($site);
}
$sessions = $request->session()->all();
$request->session()->forget('site.name');
$request->session()->flush();

```
## artisan
### 数据迁移
```
$table->bigIncrements('id'); //递增 ID（主键），相当于「UNSIGNED BIG INTEGER」型态。
$table->bigInteger('votes');//相当于 BIGINT 型态。
$table->binary('data');//相当于 BLOB 型态。
$table->boolean('confirmed');//相当于 BOOLEAN 型态。
$table->char('name', 4);//相当于 CHAR 型态，并带有长度。
$table->date('created_at');//相当于 DATE 型态
$table->dateTime('created_at');//相当于 DATETIME 型态。
$table->dateTimeTz('created_at');//DATETIME (带时区) 形态
$table->decimal('amount', 5, 2);//相当于 DECIMAL 型态，并带有精度与基数。
$table->double('column', 15, 8);//相当于 DOUBLE 型态，总共有 15 位数，在小数点后面有 8 位数。
$table->enum('choices', ['foo', 'bar']);//相当于 ENUM 型态。
$table->float('amount', 8, 2);//相当于 FLOAT 型态，总共有 8 位数，在小数点后面有 2 位数。
$table->increments('id');//递增的 ID (主键)，使用相当于「UNSIGNED INTEGER」的型态。
$table->integer('votes');//相当于 INTEGER 型态。
$table->ipAddress('visitor');//相当于 IP 地址形态。
$table->json('options');//相当于 JSON 型态。
$table->jsonb('options');//相当于 JSONB 型态。
$table->longText('description');//相当于 LONGTEXT 型态。
$table->macAddress('device');//相当于 MAC 地址形态。
$table->mediumIncrements('id');//递增 ID (主键) ，相当于「UNSIGNED MEDIUM INTEGER」型态。
$table->mediumInteger('numbers');//相当于 MEDIUMINT 型态。
$table->mediumText('description');//相当于 MEDIUMTEXT 型态。
$table->morphs('taggable');//加入整数 taggable_id 与字符串 taggable_type。
$table->nullableMorphs('taggable');//与 morphs() 字段相同，但允许为NULL。
$table->nullableTimestamps();//与 timestamps() 相同，但允许为 NULL。
$table->rememberToken();//加入 remember_token 并使用 VARCHAR(100) NULL。
$table->smallIncrements('id');//递增 ID (主键) ，相当于「UNSIGNED SMALL INTEGER」型态。
$table->smallInteger('votes');//相当于 SMALLINT 型态。
$table->softDeletes();//加入 deleted_at 字段用于软删除操作。
$table->string('email');//相当于 VARCHAR 型态。
$table->string('name', 100);//相当于 VARCHAR 型态，并带有长度。
$table->text('description');//相当于 TEXT 型态。
$table->time('sunrise');//相当于 TIME 型态。
$table->timeTz('sunrise');//相当于 TIME (带时区) 形态。
$table->tinyInteger('numbers');//相当于 TINYINT 型态。
$table->timestamp('added_on');//相当于 TIMESTAMP 型态。
$table->timestampTz('added_on');//相当于 TIMESTAMP (带时区) 形态。
$table->timestamps();//加入 created_at 和 updated_at 字段。
$table->timestampsTz();//加入 created_at and updated_at (带时区) 字段，并允许为NULL。
$table->unsignedBigInteger('votes');//相当于 Unsigned BIGINT 型态。
$table->unsignedInteger('votes');//相当于 Unsigned INT 型态。
$table->unsignedMediumInteger('votes');//相当于 Unsigned MEDIUMINT 型态。
$table->unsignedSmallInteger('votes');//相当于 Unsigned SMALLINT 型态。
$table->unsignedTinyInteger('votes');//相当于 Unsigned TINYINT 型态。
$table->uuid('id');//相当于 UUID 型态。

->after('column')//将此字段放置在其它字段「之后」（仅限 MySQL）
->comment('my comment')//增加注释
->default($value)//为此字段指定「默认」值
->first()//将此字段放置在数据表的「首位」（仅限 MySQL）
->nullable()//此字段允许写入 NULL 值
->storedAs($expression)//创建一个存储的生成字段 （仅限 MySQL）
->unsigned()//设置 integer 字段为 UNSIGNED
->virtualAs($expression)//创建一个虚拟的生成字段 （仅限 MySQL）
```

- `php artisan migrate`
- `php artisan migrate:refresh` // 重置数据库并重新运行所有迁移
- `php artisan make:controller [name] --plain`
- `php artisan tinker` // 命令行php
- `App\Models\User::create(['name'=>'wploey', 'email'=>'wploey@gmail.com', 'password'=>bcrypt('123456')])`
- `use App\Models\User`
- `User::find(1)`
- result
```
=> App\Models\User {#705
     id: 1,
     name: "wploey",
     email: "wploey@gmail.com",
     created_at: "2017-03-04 02:33:12",
     updated_at: "2017-03-04 02:33:12",
   }
```
- update
- `$user = User::first()`
- `$user->name = 'Summer'`
- `$user->save()`
- `$user->update(['name'=>'Aufree'])` // 直接通过update更新
- 

## Eloquent
- https://laravel-china.org/docs/5.1/eloquent
- 
## resource
- `resource('users', 'UsersController');`
-  =>
```
get('/users', 'UsersController@index')->name('users.index');
get('/users/{id}', 'UsersController@show')->name('users.show');
get('/users/create', 'UsersController@create')->name('users.create');
post('/users', 'UsersController@store')->name('users.store');
get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
patch('/users/{id}', 'UsersController@update')->name('users.update');
delete('/users/{id}', 'UsersController@destroy')->name('users.destroy');
```


# gulp
- `yarn global add bower`


# php

## 常用函数
- 数组
- compact //返回输出的数组，包含了添加的所有变量
- 

# redis
- `sudo service redis-server start`
- `redis-cli`
- 

mitu_3261986
