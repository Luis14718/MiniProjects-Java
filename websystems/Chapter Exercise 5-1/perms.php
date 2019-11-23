<?php
// Read and write for owner, nothing for everybody else
chmod("test.txt",0600);

// Read and write for owner, read for everybody else
chmod("test.txt",0644);

// Everything for owner, read and execute for everybody else
chmod("test.txt",0755);

// Everything for owner, read for owner's group
chmod("test.txt",0740);
?>