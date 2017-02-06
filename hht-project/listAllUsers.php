<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title>Humanity Help Team Intranet</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">;
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="./jquery-bootgrid-master/dist/jquery.bootgrid.min.js"></script>
    <script>

        $("#user_grid").bootgrid({
            echo "TOTO"
            ajax: true,
            post: function ()
            {
                /* To accumulate custom parameter with the request object */
                return {
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },
            url: "userResponse.php",
            formatters: {

            }
        });
        </script>
    <body>
		<div>

            <table id="user_grid" class="table table-condensed table-hover table-striped" width="100%" cellspacing="0" data-toggle="bootgrid">
                <thead>
                <tr>
                    <th data-column-id="id" data-type="numeric">Id</th>
                    <th data-column-id="email">Email</th>
                    <th data-column-id="firstName">Nom</th>
                    <th data-column-id="lastName">Prénom</th>
                    <th data-column-id="hhtRole">Role</th>
                </tr>
                </thead>
            </table>
		</div>
	</body>
</head>
</html>

