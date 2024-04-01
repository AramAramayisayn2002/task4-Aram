<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="container mt-5" style="width : 30%;">
                <form action="<?= DOM ?>index/apiGeneration" method="post" class="form-horizontal">
                    <div class="mt-3">
                        <label class="form-label">Specify the location</label>
                        <input class="form-control" type="text" name="location">
                    </div>
                    <div class="mt-5">
                        <button type="submit" name="submit" class="form-control btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>