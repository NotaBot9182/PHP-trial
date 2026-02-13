 <?php require "partials/head.php"; ?>
    <?php require "partials/nav.php" ; ?>


  <header class="relative bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">My notes</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  
    <?php foreach($x as $note): ?>
    <a href="/laracasts/demo/note.php?id=<?php echo $note["id"]?>">  
    <li><?php echo $note['body']; ?></li>
      <?php endforeach; ?>
    </a>
    </div>
  </main>
<?php require "partials/footer.php" ; ?>