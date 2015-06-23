<?php
    $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
    $wp_load = $absolute_path[0] . 'wp-load.php';
    require_once($wp_load);


    header("Content-type: text/javascript; charset: UTF-8");
    header("Cache-control: must-revalidate");  ?>
$(function () {
    var files = new Array();
    <?php
        if ($handle = opendir('./files')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
    			?>files.push("<?php echo $entry ?>");<?php
                }
            }
            closedir($handle);
       }
    ?>
    var html = '';
    <?php $html = file_get_contents('http://kirmani.io/feed');
    $items = substr_count($html,"<content:encoded>"); ?>
    html = <?php echo json_encode($html); ?>;
    var items = [];
    var splittedHTML = html.split("content:encoded>");
    var position = 0;
    for (i = 0; i < splittedHTML.length; i++) {
    	if (i % 2 == 1) {
    		items.push(splittedHTML[i]);
    		position++;
    	}
    	/*if (lines[i].contains("<content:encoded>")) {
    		var start = lines[i].indexOf("<content:encoded>") + 17;
    	}
    	if (lines[i],contains("</content:encoded>")) {
    		var end = lines[i].indexOf("</content:encoded>");
    		items[position] = html.substring(start,end);;
    		position++;
    	}*/

    }
    for (i = 0; i < items.length; i++) {
    	items[i] = items[i].replace(/<\/?[^>]+(>|$)/g, "");
    	items[i] = items[i].replace("]]>","");
    	items[i] = items[i].replace("&nbsp","");
    }
    function sendMail(message) {
        var link = "mailto:sean@kirmani.io"
                 + "?subject=" + escape("Kirmani Terminal Message")
                 + "&body=" + escape(message)
        ;

        window.location.href = link;
    }
    function goToURL(url) {
    	 window.location = url;
    }
    $("#term").hide();
    $(document).keydown(function(e){
        if (e.keyCode == 192) {
        	$("#term").slideToggle("fast");
        }
    });
    jQuery(function($, undefined) {
    $("#term").terminal(function(command, term) {
		var words = command.split(" ");
		func = words[0];
		var option = '';
		var parameter = '';
		for (i = 1; i < words.length; i++) {
			if (i % 2 == 1) {
				option = words[i];
				if (i + 1 < words.length) {
					parameter = words[i+1];
				}
			}
		}
		func = func.toUpperCase();
		switch (func)
		{
			case "HELP":
				term.echo("    cat");
				term.echo("    cd");
				term.echo("    display");
				term.echo("    edit");
				term.echo("    hello");
				term.echo("    help");
				term.echo("    ls");
				term.echo("    login");
				term.echo("    mail");
				term.echo("    max");
				term.echo("    min");
				break;
			case "HELLO":
				option = option.toUpperCase();
				if (option !== '') {
					switch (option)
					{
						case "-NAME":
							term.echo("Hello, " + parameter + "!");
							break;
						default:
							term.echo("Hello: Usage: hello [-name]");
							break;
					}
				} else {
					term.echo("Hello!");
				}
				break;
			case "MAIL":
				if (option !== '') {
					sendMail(option);
				} else {
					term.echo("Mail: Usage: mail [message]");
				}
				break;
			case "CAT":
				found = false;
				foundIndex = -1;
				for (i = 0; i < files.length; i++) {
					if (option == files[i]) {
						found = true;
						foundIndex = i;
					}
				}
				if (found) {
					var rawFile = new XMLHttpRequest();
					rawFile.open("GET", "files/" + option, true);
					rawFile.onreadystatechange = function ()
					{
						if(rawFile.readyState === 4)
						{
							if(rawFile.status === 200 || rawFile.status == 0)
							{
								var allText = rawFile.responseText;
								term.echo(allText);
							}
						}
					}
					rawFile.send(null);
				} else {
					term.echo("File not found");
				}
				break;
			case "LS":
				for (i = 0; i < files.length; i++) {
					term.echo("    " + files[i]);
				}
				term.echo("    about/");
				term.echo("    blog/");
				term.echo("    github/");
				term.echo("    linkedin/");
				term.echo("    resume/");
				term.echo("    twitter/");
				 break;
			case "CD":
				if (option !== '') {
					option = option.toUpperCase();
					switch (option) {
						case "ABOUT":
							goToURL("http://kirmani.io/about");
							break;
						case "BLOG":
							goToURL("http://kirmani.io/blog");
							break;
						case "GITHUB":
							goToURL("https://github.com/kirmani");
							break;
						case "LINKEDIN":
							goToURL("http://www.linkedin.com/in/sekrim");
							break;
						case "RESUME":
							goToURL("http://kirmani.io/resume");
							break;
						case "TWITTER":
							goToURL("http://twitter.com/SeanKirmani");
							break;
						default:
							term.echo("cd: undefined: No such file or directory");
							break;
					}
				} else {
					term.echo("cd: undefined: No such file or directory");
				}
				break;
			case "DISPLAY":
				if (option !== '') {
					option = option.toUpperCase();
					switch (option) {
						case 'BLOG':
							if (parameter !== '') {
								term.echo(items[parameter - 1]);
							} else {
								term.echo(items[0]);
							}
							break;
						default:
							term.echo("Display: Usage: display [blog]");
							break;
					}
				} else {
					term.echo("Display: Usage: display [blog]");
				}
				break;
			case "MAX":
				$('#term').animate({height: window.innerHeight}, 500, function() {});
				break;
			case "MIN":
				$('#term').animate({height: 100}, 500, function() {});
				break;
			case "EDIT":
				goToURL(editURL);
				break;
			case "LOGIN":
				if (option !== '') {
					option = option.toUpperCase();
					switch (option) {
						case 'SEAN':
							term.push(function(command, term) {
									var password = command;
									if (password == 'sean123') {
										document.title = "sean@kirmani.io";
								  		term.push(function(command, term) {
											var words = command.split('');
											func = words[0];
											var option = '';
											var parameter = '';
											for (i = 1; i < words.length; i++) {
												if (i % 2 == 1) {
													option = words[i];
													if (i + 1 < words.length) {
														parameter = words[i+1];
													}
												}
											}
											func = func.toUpperCase();
											switch (func) {
												<?php include('admin.php') ?>
											}
										}, {
											prompt: 'sean@kirmani:/$ '})
									}
									else {
										term.error("Incorrect password");
									}
							 	}, {
									prompt: 'Password: '
								});
							break;
						default:
							term.echo("Login: Usage: login [user]");
							break;
					}
				} else {
					term.echo("Login: Usage: login [user]");
				}
				break;
			case "":
				break;
			default:
				try {
					var result = window.eval(command);
					if (result !== undefined) {
						term.echo(new String(result));
					}
				} catch(e) {
					term.error(new String(e));
				}
				break;
		}
    }, {
        greetings: 'guest@sekrim:/$ cat welcome.txt\nWelcome to the UniXrim console.\nUse "ls", "cat", and "cd" to navigate the filesystem.',
        name: 'js_demo',
        prompt: 'guest@kirmani:/$ ',
		height: 100,
		keypress: function(e) {
                if (e.which == 96) {
                    return false;
                }
            }
        });
    });
});
