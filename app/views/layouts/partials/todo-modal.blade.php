 <p>
                            <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal2">Source</a>
                            <a href="/img/todo.png" class="btn btn-default" role="button" target="_blank">Screenshot</a>
                        </p>
<!-- beginmodal -->
                        <div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">PHP Code</h4>
                                    </div>
                                    <div class="modal-body">
<!-- todo code begining -->
<pre>
$items_per_page = 5;

class InvalidInputException extends Exception{}

function getOffset($items_per_page)
{
    $page = isset($_GET['page'])? $_GET['page'] : 1;
    return ($page - 1) * $items_per_page;
}

//-------------1. Establish DB Connection
$dbc = new PDO('mysql:host=127.0.0.1;dbname=todo_db', 'ashley', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try
{
//-------------2. Check if something was posted
    if(isset($_POST['new_item']))
    {
        //-------------a. Is item being added? => Add todo!
        if((strlen($_POST['new_item']) != 0 && (strlen($_POST['new_item'])) <= 240))
        {
            $stmt = $dbc->prepare('INSERT INTO todo_list (todo) VALUES (:todo)');
            $stmt->bindValue(':todo', htmlspecialchars(strip_tags($_POST['new_item'])), PDO::PARAM_STR);
            $stmt->execute();
        }
        else
        {
            throw new InvalidInputException("Error! Please enter a todo longer than 0 characters and less than 240");
        }
    }
    //-------------b. Is item being removed? => Remove it! As a post
    if(isset($_POST['remove_id']))
    {
        $dbc->query('DELETE FROM todo_list WHERE id = ' . $_POST['remove_id']);
    }
}
catch (InvalidInputException $e)
{
    $e->getMessage();
}

 if(isset($_POST['reset']))
    {
        $dbc->query('TRUNCATE TABLE todo_list;');
    }

//-------------3. Query DB for total todo count.
$count = $dbc->query('SELECT count(*) FROM todo_list')->fetchColumn();
//divides the count by the items/page to determine total pages and show the proper pagination links
$numPages = ceil($count / $items_per_page);

//-------------4. Determine pagination values.
$page = isset($_GET['page'])?$_GET['page']: 1;
$previous_page = $page - 1;
$next_page = $page + 1;

//preparing data from the table so that it shows a limit of items and an offset for pagination
$query = 'SELECT * FROM todo_list LIMIT :limit OFFSET :offset';
$stmt = $dbc->prepare($query);
$stmt->bindValue(':limit', $items_per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', getOffset($items_per_page), PDO::PARAM_INT);
$stmt->execute();

//-------------5. Query for todos on current page.
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
</pre>
<!-- todo code end -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- endmodal -->