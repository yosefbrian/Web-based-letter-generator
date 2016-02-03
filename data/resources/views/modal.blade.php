<<?php  
$book = (isset($_POST['book'])) ? $_POST['book'] : '';
$book = trim(''.$book);
?>


            <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <span style="..."><b>Perhatian</b></span>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <input type="hidden" value="<?php echo $book->id;?>" name="id">
                                        <h5>Yakin ingin menghapus?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
                                        <a class="btn btn-danger" href="{{ action('HomeController@delete', $book->id) }}">Hapus</a>
                                    </div>

        