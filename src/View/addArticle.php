<?php $this->layout('layout', ['title' => 'Add Article']) ?>

<h1>Add ARTICLE</h1>

<form action="/CRUDController.php">
  <fieldset>
    <legend>Article </legend>
    Title:<br>
    <input type="text" name="title" value="">
    <br>
    Subheading:<br>
    <input type="text" name="subheading" value="">
    <br>
    Body:<br>
    <textarea name="body" rows="10" cols="30"> </textarea>
    <br>
    <br><br>
    <input type="submit" value="Add">
  </fieldset>
</form>

