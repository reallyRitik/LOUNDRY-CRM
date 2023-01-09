                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold text-primary">Expenditure Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_karyawan" action="<?php echo base_url().'pengeluaran/laporan_filter' ?>" method="post" class="w-50 user needs-validation mx-3 mb-4" novalidate>
                                <h5>Expenditure on time range</h5>
                                <div class="form-group">
                                    <label class="control-label text-primary">From</label>
                                    <input type="date"  class="form-control" name="dari" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-primary">To</label>
                                    <input type="date"  class="form-control" name="sampai" required>
                                </div>
                                <button type="submit" class="flex-fill btn btn-primary btn-user px-4">Search</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            

            