<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{ route('student.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"> Nama Siswa</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                                name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">NIS</label>
                            <input type="number" class="form-control" placeholder="" name="nis" autocomplete="off"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                            <select name="major_id" class="dataTable-selector form-select" required>
                                <option value="" selected="" disabled>-- Pilih --</option>
                                @foreach ($major as $m)
                                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@foreach ($student as $t)
    <div class="modal fade" id="modalDelete{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action={{ url('/siswa/delete/' . $t->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <center class="mt-3">
                            <h5>
                                apakah anda yakin ingin menghapus data ini?
                            </h5>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-danger">Hapus!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

@foreach ($student as $s)
<div class="modal fade" id="modalShow{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{ route('student.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"> Nama Siswa</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $s->name }}"
                                name="name" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">NIS</label>
                            <input type="number" class="form-control" value="{{ $s->nis }}" name="nis" autocomplete="off"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $s->major->name }}"
                                name="name" readonly>
                        </div>
                    </div>
                   
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endforeach