<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Download</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Surat Download</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-table"></i> Surat Download
                </h3>
            </div>
            <div class="card-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-file"></i> Surat
                        </h3>
                    </div>
                    <form action="" method="get" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Surat</label>
                                <div class="col-sm-6">
                                    <select name="id" id="selected-surat" class="form-control select2bs4" required>
                                        <option selected="selected" value="">- Pilih Data -</option>
                                        <option value="skn">Surat Keterangan Nikah</option>
                                        <option value="skik">Surat Keterangan Izin Keluarga</option>
                                        <option value="skm">Surat Keterangan Miskin/Tidak Mampu</option>
                                        <option value="skiu">Surat Keterangan Izin Usaha</option>
                                        <option value="skk">Surat Keterangan Kehilangan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-downlod btn-info"> Download</a>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    let type = '';
    let nama = '';
    let url = '<?= base_url('') ?>';
    $('#selected-surat').change(function() {

        if ($(this).val() === 'skn') {
            type = url + 'keterangan_nikaha.docx'
            nama = 'Surat Keterangan Nikah'

        } else if ($(this).val() === 'skik') {
            type = url + 'surat_izin_keluarga.docx'
            nama = 'Surat Keterangan Izin Keluarga'

        } else if ($(this).val() === 'skm') {
            type = url + 'keterangan_tidak_mampu.docx'
            nama = 'Surat Keterangan Miskin/Tidak Mampu'

        } else if ($(this).val() === 'skiu') {
            type = url + 'izin_usaha.docx'
            nama = 'Surat Keterangan Izin Usaha'

        } else if ($(this).val() === 'skk') {
            type = url + 'kehilangan.docx'
            nama = 'Surat Keterangan Kehilangan'
        }
    });


    $('.btn-downlod').click(function() {
        downloadFile(type, nama + '.docx');
    });

    function downloadFile(url, fileName) {
        fetch(url, {
                method: 'get',
                mode: 'no-cors',
                referrerPolicy: 'no-referrer'
            })
            .then(res => res.blob())
            .then(res => {
                const aElement = document.createElement('a');
                aElement.setAttribute('download', fileName);
                const href = URL.createObjectURL(res);
                aElement.href = href;
                // aElement.setAttribute('href', href);
                aElement.setAttribute('target', '_blank');
                aElement.click();
                URL.revokeObjectURL(href);
            });
    };
</script>

<?= $this->endSection() ?>