<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript">
        </script>
        <script>
            //This example shows getting a local ATOM file. I am assuming that you will be using a proxy to fetch the feed as you 
            //are getting it from a remote source

            //get the feed
            $.get("http://laramontavadaw.blogspot.com/feeds/posts/default", function(data){

                //if XML loaded successfully find all blog entries
                html = "";
                $(data).find("entry").each(function(){

                    //get text for title and the content 
                    title = $(this).find("title").text();

                    content = $(this).find("content").text()

                    //create your own html
                    html += "<h1>" + title + "</h1>";
                    html += "<div class='blogEntry'>" + content + "</div>"

                })
                //append html to the container of yor choice
                $(".blogClone").append(html)
            })

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Untitled Document</title>
    </head>
    <body>
        <div class="blogClone">
        </div>
    </body>
</html>
