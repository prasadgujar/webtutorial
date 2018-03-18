<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
        $(document).ready(function() {
        $.get(
            "https://www.googleapis.com/youtube/v3/videos",{
            part : 'snippet', 
            id : 'DcBxt54LLCE',
            key: 'AIzaSyCq85iie6a_WGuLjh2qQAVvpLifAlTngcQ'},
            function(data) {
           $.each( data.items, function( i, item ) {
                    alert(item.snippet.title);
      alert(item.snippet.description);
               });
           }
         );
}); 
</script>
