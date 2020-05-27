<style>
.vertical-menu {
  width: 200px; /* Set a width if you like */
}

.vertical-menu a {
  background-color: #eee; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
  background-color: #4CAF50; /* Add a green color to the "active/current" link */
  color: white;
}
</style>

<div class="vertical-menu">
  <span><?php echo $atual; ?>
  <a href="#" class="active">Automoveis</a>
  <a href="../automovel/form_create">Adicionar</a>
  <a href="../automovel/listar">Listar</a>
</div>
