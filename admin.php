    case "HELP": 
        term.echo("    admin");
        term.echo("    cat");
        term.echo("    cd");
        term.echo("    display");
        term.echo("    hello");
        term.echo("    help");
        term.echo("    ls");
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
    case "ADMIN":
        option = option.toUpperCase();
        if (option !== '') {
            switch (option) {
                case "NEW":
                    parameter = parameter.toUpperCase();
                    switch (parameter) {
                        case "POST":
                            goToURL("http://sekrim.com/wp-admin/post-new.php");
                            break;
                        case "PAGE":
                            goToURL("http://sekrim.com/wp-admin/post-new.php?post_type=page");
                            break;
                        default:
                            term.echo("Admin: Usage: admin new [post] [page]");
                            break;
                    }
                    break;
                case "ANALYTICS":
                    goToURL("http://www.google.com/analytics/web/?hl=en#report/visitors-overview/a38643243w67343847p69298455/");
                    break;
                default:
                    term.echo("Admin: Usage: admin [new] [analytics]");
                    break;
            }	
        } else {
            term.echo("Admin: Usage: admin [new] [analytics]");
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
                    goToURL("http://sekrim.com/about");
                    break;
                case "BLOG":
                    goToURL("http://sekrim.com/blog");
                    break;
                case "GITHUB":
                    goToURL("http://git.sekrim.com");
                    break;
                case "LINKEDIN":
                    goToURL("http://www.linkedin.com/in/sekrim");
                    break;
                case "RESUME":
                    goToURL("http://sekrim.com/resume");
                    break;
                case "TWITTER":
                    goToURL("http://twitter.sekrim.com");
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
		$('#term').animate({height: $(window).height()}, 500, function() {});
		break;
	case "MIN":
		$('#term').animate({height: 100}, 500, function() {});
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