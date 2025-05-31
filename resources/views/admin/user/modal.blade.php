<!-- Modal Hapus Data User -->
<div class="modal fade" id="modal-delete-{{ $item->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalLabel-{{ $item->id }}">Hapus {{ $title }} ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <div class="row"><div class="col-6">Nama</div><div class="col-6">: {{ $item->nama }}</div></div>
        <div class="row"><div class="col-6">Npm</div><div class="col-6">: {{ $item->npm }}</div></div>
        <div class="row"><div class="col-6">Email</div><div class="col-6">: <span class="badge badge-primary">{{ $item->email }}</span></div></div>
        <div class="row">
          <div class="col-6">Jabatan</div>
          <div class="col-6">:
            @if ($item->jabatan == 'Admin')
              <span class="badge badge-dark">{{ $item->jabatan }}</span>
            @else
              <span class="badge badge-info">{{ $item->jabatan }}</span>
            @endif
          </div>
        </div>
        <div class="row"><div class="col-6">Semester</div><div class="col-6">: {{ $item->semester }}</div></div>
        <div class="row"><div class="col-6">Nama Perusahaan</div><div class="col-6">: {{ $item->nama_perusahaan }}</div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
          <i class="fas fa-times mr-2"></i>Tutup
        </button>
        <form action="{{ route('userDestroy', $item->id) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger btn-sm">
            <i class="fas fa-trash mr-2"></i>Hapus
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
