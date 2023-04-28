# EasyQueryPHP

## Understand EasyQuery parameters

```php
$db // Variable - Put variable where your PDO is done
```

```php
$fetch // String - Put "all" for FetchAll or "one" for Fetch
```

```php
$select // String - What you want select like "*"
```

```php
$from // String - What table you want like "users"
```

```php
$where // String - Condition like "id > 1"
```

```php
$limit // Int - Maximum number of row you want
```

```php
$orderby // String - Order you want like "
```

```php
$objectReturn // Bool - If you want a object return (Not yet stable with FetchAll)
```

## SELECT Query

```php

$result = easyQuery($db, $fetch, $select, $from, $where, $limit, $orderby, $objectReturn);

```
