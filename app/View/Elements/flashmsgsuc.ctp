


 <div class="alert159 success">
  <span class="closebtn159" onclick="this.parentElement.style.display='none';">&times;</span>

Success! <?php echo h($message); ?>
</div> 

<style>
.alert159 {
    opacity: 1;
    transition: opacity 0.6s; /* 600ms to fade out */
}
</style>

<script>
// Get all elements with class="closebtn159"
var close = document.getElementsByClassName("closebtn159");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
    // When someone clicks on a close button
    close[i].onclick = function(){

        // Get the parent of <span class="closebtn159"> (<div class="alert159">)
        var div = this.parentElement;

        // Set the opacity of div to 0 (transparent)
        div.style.opacity = "0";

        // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>