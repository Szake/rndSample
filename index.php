<?php
  /* Variables */
  $uri = 'task-1';
?>

<!-- Header -->
<?php include 'inc/header.php' ?>

  <!-- Main -->
  <div class="layout-main">
    
    <!-- Sidebar -->
    <?php include 'inc/sidebar.php' ?>
    
    <!-- Content -->
    <div class="layout-content custom-text">

      <h1>Задание 1</h1>
      
      <h2>Постановка задачи</h2>
      <div class="panel panel-default">
        <p>There are all elements on this page.</p>
        <p>Colors You can change in settings.scss file.</p>
        <p>Scripts and Styles for tasks You should set into the proper folders.</p>
        <p>And don't forget to check tasks in navigation with classes "done" if they are done and "progress" if they are in progress.</p>
        <p>Enjoy it!</p>
      </div>

      <h2>Реализация</h2>
      <div class="panel panel-default">
        <p>This task is done!</p>
        <p>This panel is default. There is also panel for notifications. It is a little bit lower.</p>
      </div>

      <div class="panel panel-note">
        <p>Notification goes here... Or You can just emphasise the text You want.</p>
      </div>

<pre class="code">
This is a piece of code.

var a, b;

( a > b ) ? a : b;

// Tha same as: 

if ( a > b ) { a; }
else { b; }
</pre>
    
    <p>And horizontal line...</p>
    <hr>

    <div class="panel panel-default">
      <table class="table table-default">
        <thead>
          <tr>
            <th>This is a Default Table in the Default Panel!</th>
            <th>Table Head</th>
            <th>Table Head</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <td>Table Footer</td>
            <td>Table Footer</td>
            <td>Table Footer</td>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Table Content</td>
            <td>Table Content</td>
            <td>Table Content</td>
          </tr>
        </tbody>
      </table>
    </div>

    <p>And horizontal line...</p>
    <hr>


    </div>

  </div>

<!-- Footer -->
<?php include 'inc/footer.php' ?>