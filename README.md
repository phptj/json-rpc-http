# json-rpc-http
Laravel 5 json-rpc-http操作


## 安装

可以通过 [Composer](http://getcomposer.org) 安装
`tangjun/json-rpc-http`， 在`composer.json`require部分引入，然后执行 ```composer install```或```composer update```（注意 ：composer update会更新你其他没有固定本部的组件）.

```json
{
    "require": {
       
        "tangjun/json-rpc-http": "~1.01"
        
    }
   
}
```

或者

项目根目录执行:
```
composer require tangjun/json-rpc-http
```


## 使用

要使用sys-audit-log服务提供程序，在引导Laravel应用程序时必须注册该提供程序。有
基本上有两种方法。

Find the `providers` key in `config/app.php` and register the JsonRpcHttpClient Service Provider.

Laravel 5.1+
```php
    'providers' => [
        // ...
        TangJun\JsonRpcHttp\JsonRpcHttpServiceProvider::class,
    ]
```


## 配置

移动配置文件到根目录config下面.

```$ php artisan vendor:publish```

`config/rpc-services.php`

```php
$services = [
    [
        'services' => [
            'CalculatorService',
            'ProductService',
        ],
        'nodes' => [
            ['host' => '127.0.0.1', 'port' => 9503],
            ['host' => '127.0.0.1', 'port' => 9503]
        ]
    ]
];

return [
    'services' => $services
];

```
## 使用
```
use TangJun\JsonRpcHttp\JsonRpcHttpClient;

class a extends JsonRpcHttpClient {
    /**
     * The service name of the target service.
     *
     * @var string
     */
    protected $serviceName = 'ProductService';

    /**
     * The protocol of the target service, this protocol name
     *
     * @var string
     */
    protected $protocol = 'jsonrpc-http';


    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function list($where,$select,$page,$perPage)
    {
        return $this->__request(__FUNCTION__,compact('where','select','page','perPage'));
    }

}

$a = new a();

$resp = $a->list(" id > 10001 and status > 0 ",['id'],1,10);

```





