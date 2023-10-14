<div class="relative" x-show="$wire.modalTambah">
    <style>

        .modal-wrapper {          
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index=200;
        }

        .modal {
            background-color: white;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

    </style>

    <div id="popupWrapper" class="modal-wrapper transition ease-in-out flex items-center justify-center">
      <div id="popup" class="modal sm:w-1/2">

        {{ $slot }}

      </div>
    </div>

    @push('scripts')


    @endpush

</div>