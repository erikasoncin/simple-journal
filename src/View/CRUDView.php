<?php $this->layout('layout', ['title' => 'Manage']) ?>

<h1>MANAGE ARTICLES</h1>

<form action="/CRUDController.php">
  <fieldset>
    <legend>Article </legend>
    Title:<br>
    <input type="text" name="title" value="<? //title preso dalla query?>">
    <br>
    Subheading:<br>
    <input type="text" name="subheading" value="<? //subheading preso dalla query ?>">
    <br>
    Body:<br>
    <textarea name="body" rows="10" cols="30"><? //body preso dalla query ?></textarea>
    <br>
    Date: <?php //date preso dalla query  ?>
    <br>
    Author: <?php //author preso dalla query  ?>
    <br><br>
    <input type="submit" value="Delete">
    <input type="submit" value="Update">
    <button type="button" onclick="window.location.href='/addArticle.php'">Add</button>
  </fieldset>
</form>

