<p>
                            <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal1">Source</a>
                            <a href="/img/address.png" class="btn btn-default" role="button" target="_blank">Screenshot</a>
                        </p>
                            <!-- beginmodal -->
                            <div class="modal fade bs-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">PHP and HTML Code</h4>
                                        </div>
                                        <div class="modal-body">
<!-- beginning address code -->
<pre>
class InvalidInputException extends Exception{}

//-------------1. Establish DB Connection
$dbc = new PDO('mysql:host=127.0.0.1;dbname=address_book', 'ashley', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try
{
    if(!empty($_POST['new_name']) && !empty($_POST['new_number']))
    {
        $stmt = $dbc->prepare('INSERT INTO contact (first_name, phone_number) VALUES (:new_name, :new_number)');
        $stmt->bindValue(':new_name', htmlspecialchars(strip_tags($_POST['new_name'])), PDO::PARAM_STR);
        $stmt->bindValue(':new_number', htmlspecialchars(strip_tags($_POST['new_number'])), PDO::PARAM_STR);
        $stmt->execute();
    }
    else
    {
        throw new InvalidInputException("Please enter valid data");
    }

}
catch (InvalidInputException $e)
{
    $e->getMessage();
}

$limit = 10;
$offset = 0;

//preparing data from the table so that it shows a limit of items and an offset for pagination
$query = 'SELECT * FROM contact LIMIT :limit OFFSET :offset';
$stmt = $dbc->prepare($query);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

//-------------5. Query for todos on current page.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
&lthtml>
&lthead>
    &lttitle>Address Book&lt/title>
    &ltlink rel="stylesheet" href="/css/bootstrap.min.css">
    &ltlink rel="stylesheet" href="/css/address.css">
&lt/head>
&ltbody>
    &ltdiv class="container">
        &lth2>Address Book&lt/h2>
        &lttable class="table table-striped">
            &ltth>Id&lt/th>
            &ltth>Name&lt/th>
            &ltth>Phone Number&lt/th>
            &ltth>Actions&lt/th>
            &lt? foreach($contacts as $contact):?>
                &lttr>
                    &lttd>&lt?= $contact['con_id'] ?>&lt/td>
                    &lttd>&lt?= $contact['first_name'] ?>&lt/td>
                    &lttd>&lt?= $contact['phone_number'] ?>&lt/td>
                    &lttd>
                        &ltbutton class="btn btn-primary">View&lt/button>
                        &ltbutton class="btn btn-danger">Remove&lt/button>
                    &lt/td>
                &lt/tr>
            &lt? endforeach; ?>
        &lt/table>
    &lt/div>
    &ltdiv>
        &lth2>Add New Contact&lt/h2>
        &lt? if(isset($e)): ?>
        &lt?= $e->getMessage(); ?>
        &lt? endif; ?>
        &ltform method="POST">
            &ltinput type="text" name="new_name" id="new_name" placeholder="Name">
            &ltinput type="text" name="new_number" id="new_number" placeholder="Phone Number">
            &ltbutton type="submit" class="btn btn-success">Add Contact&lt/button>
        &lt/form>
    &lt/div>

&lt/body>
&lt/html>
</pre>
<!-- end address book code -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- endmodal -->