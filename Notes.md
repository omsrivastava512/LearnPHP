# PHP Notes

## 08-11-2023

### What is PHP?

PHP is a server-side scripting language, which means it runs on the web server. PHP scripts are executed on the server, and their results are sent to the client's web browser. PHP is mainly used for server-side operations like:

- Processing form data
- Interacting with databases
- Generating dynamic web pages

PHP can be used to create web applications, handle forms, and interact with databases. PHP code is embedded directly into HTML files and executed on the server before the page is sent to the client's browser.

### php.ini Configuration

`php.ini` is a configuration file used in PHP (Hypertext Preprocessor) to customize the behavior of the PHP runtime. It contains various settings and parameters that control how PHP behaves when processing scripts. The php.ini file allows developers and server administrators to configure PHP settings according to their specific requirements.

#### register_globals Directive

`register_globals` in PHP.ini is a configuration directive that determines whether or not to automatically create global variables for data sent to the script via URL parameters or form submissions. When register_globals is enabled, any incoming data (from forms, cookies, or query strings) automatically becomes a global variable.

For example, if a form has a field named `username`, with register_globals enabled, both `$_POST['username']` and `$username` would contain the submitted value.

If register_globals is enabled, the PHP script can directly use `$user` without the need to access `$_GET['user']`. This might seem convenient, but it opens the door for attackers to manipulate variables directly from the URL, posing significant security threats.

**Example:**

HTML FORM:
```html
<form method="post" action="process.php">
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>
```

With register_globals ON:
```php
<?php
echo $username; // Output: The submitted value of the 'username' field from the form
?>
```

With register_globals OFF:
```php
<?php
echo $_POST['username']; // Output: The submitted value of the 'username' field from the form
?>
```

## 22-11-2023

### Variable Scope in PHP

In PHP, global variables (declared outside functions) cannot be accessed locally (within functions) and local variables cannot be accessed globally.

```php
<?php
$G = 5; // global var
 
function h(){
    $L = 5;     // local var
    echo $G;    // inaccessible    
}
h();            // function calling
echo $L;        // inaccessible
?>
```

#### Accessing Global Variables in Functions

To access global variables in a function, use the `global` keyword:

```php
<?php
$G = 5; 
 
function h(){
    global $G;
    echo $G;
    // or
    echo $GLOBALS['G'];
}

h();
?>
```

PHP stores global variables in an array `$GLOBALS[]` and can also be accessed like `$GLOBALS['G']`.