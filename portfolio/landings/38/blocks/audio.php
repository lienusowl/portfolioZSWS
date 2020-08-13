 <link rel="stylesheet" href="css/audio.css">

    <script src="js/jquery.simpleplayer.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var settings = {
                progressbarWidth: '200px',
                progressbarHeight: '5px',
                progressbarColor: '#22ccff',
                progressbarBGColor: '#eeeeee',
                defaultVolume: 0.8
            };
            $(".player").player(settings);
        });
    </script>