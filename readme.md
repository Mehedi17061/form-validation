## Form validaiton file upload

this is a tutorial for form validation with file uploadinng

## form isset with validatinon

<img src="./assets/img/form.PNG">

```php
/**
* Student Data form
*/



 if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $roll = $_POST['roll'];


    if(empty($name))
    {
       $err['name'] = "<p style='color:red;'>*Required</p>";
    }
    if(empty($email))
    {
       $err['email'] = "<p style='color:red;'>*Required</p>";
    }
    if(empty($cell))
    {
       $err['cell'] = "<p style='color:red;'>*Required</p>";
    }

    /**
     * form validation
     */

  if(empty($name)||empty($email)||empty($roll)|| empty($cell))
    {
       $msg =  "<p class='alert alert-warning alert-dismissible'> All field are require. <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </p>";
    }
    else
    {

       $msg =  "<p class='alert alert-info alert-dismissible'> Data Stable <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </p>";
    }

 }

```
## indivitual valid file

```php

 if(isset($msg))
   {
      echo $msg;
   }
    if(isset($err['name']))
 {
   echo $err['name'];
  }
```
