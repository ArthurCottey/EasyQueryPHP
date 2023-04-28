# EasyQueryPHP

## ⚠️IMPORTANT TO KNOW

EasyQuery is not a stable project yet and may still have many bugs. Don't hesitate to report them or even try to fix them to make a push commit.

## Installation

Copy/past the easyquery.php file on your project and do include where your do your request.

```php
include('easyquery.php');
```

## Understand EasyQuery parameters

```php
$db // Variable (Mandatory) - Put variable where your PDO is done
```

```php
$fetch // String (Mandatory) - Put "all" for FetchAll or "one" for Fetch
```

```php
$select // String (Mandatory) - What you want select like "*"
```

```php
$from // String (Mandatory) - What table you want like "users"
```

```php
$where // String (Optional -> Put false to don't use) - Condition like "id > 1"
```

```php
$limit // Int (Optional -> Put false to don't use) - Maximum number of row you want
```

```php
$orderby // String (Optional -> Put false to don't use) - Order you want like "
```

```php
$objectReturn // Bool (Optional -> Put false to don't use) - If you want a object return (Not yet stable with FetchAll)
```

## SELECT Query

```php

$result = easyQuery($db, $fetch, $select, $from, $where, $limit, $orderby, $objectReturn);

```

## Know more about how work EasyQuery?

EasyQuery work with a simple PHP function. EasyQuery function take lot of parameter, do his instruction and do a return on your variable.
