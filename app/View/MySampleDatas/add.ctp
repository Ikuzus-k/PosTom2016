<h1>Add Page</h1>
<p>MySampleData Add Form.</p>
<?php
  echo $this->Form->create('MySampleData');
  echo $this->Form->input('name');
  echo $this->Form->input('mail');
  echo $this->Form->input('tel');
  echo $this->Form->input("tet");
  echo $this->Form->end('Submit');
?>
