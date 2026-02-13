 <?php require "partials/head.php"; ?>
    <?php require "partials/nav.php" ; ?>


  <header class="relative bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Note</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <a href='/laracasts/demo/notes.php'>
        <p>Return to notes....</p>
</a>  
    
    <?php echo $x[0]['body']?>
    </div>
  </main>
<?php require "partials/footer.php" ; ?>