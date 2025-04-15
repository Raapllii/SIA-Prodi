<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Home</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="bg-white p-4 sm:p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <h1 class="text-xl sm:text-2xl font-semibold mb-4">File Upload</h1>
        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 mb-4">
          <button id="single-file-btn"
            class="bg-purple-600 text-white px-4 py-2 rounded-full flex items-center justify-center space-x-2">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Single File</span>
          </button>
          <button id="multiple-file-btn"
            class="bg-purple-600 text-white px-4 py-2 rounded-full flex items-center justify-center space-x-2">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Multiple File</span>
          </button>
        </div>
        <form id="upload-form" action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="file" id="single-file-input" name="file" class="hidden" accept="*/*"
            onchange="handleSingleFileUpload(event)" />
          <div id="drop-zone"
            class="border-2 border-dashed border-purple-300 bg-gray-50 p-6 rounded-lg flex items-center justify-center mb-4"
            style="height: 200px">
            <span class="text-gray-500">Drop your item$item here</span>
          </div>
          <div class="bg-white shadow rounded-lg overflow-hidden mb-4">
            <table class="min-w-full bg-white">
              <thead>
                <tr>
                  <th class="py-2 px-4 border-b text-left text-sm sm:text-base">
                    Name
                  </th>
                  <th class="py-2 px-4 border-b text-left text-sm sm:text-base">
                    Size
                  </th>
                  <th class="py-2 px-4 border-b text-left text-sm sm:text-base">
                    Progress
                  </th>
                  <th class="py-2 px-4 border-b text-left text-sm sm:text-base">
                    Status
                  </th>
                  <th class="py-2 px-4 border-b text-left text-sm sm:text-base">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody id="file-queue">
                @forelse ($item as $file)
          <tr class="bg-gray-100">
            <td class="py-2 px-4 border-b text-sm sm:text-base">
            {{ $file->name }}
            </td>
            <td class="py-2 px-4 border-b text-sm sm:text-base">
            {{ $file->size }} KB
            </td>
            <td class="py-2 px-4 border-b text-sm sm:text-base">
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div class="bg-purple-600 h-2.5 rounded-full" style="width: {{ $file->progress }}%"></div>
            </div>
            </td>
            <td class="py-2 px-4 border-b text-sm sm:text-base">
            {{ $file->status }}
            </td>
            <td class="py-2 px-4 border-b text-sm sm:text-base">
            <button class="bg-red-600 text-white px-2 py-1 rounded-full"
              onclick="removeFile('{{ $file->id }}')">
              Remove
            </button>
            </td>
          </tr>
        @empty
      <tr id="empty-row" class="bg-gray-200">
        <td class="py-2 px-4 border-b text-sm sm:text-base" colspan="5">
        Queue is empty
        </td>
      </tr>
    @endforelse
              </tbody>
            </table>
          </div>
          <div class="mb-4">
            <span class="text-sm sm:text-base">Queue progress:</span>
            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
              <div class="bg-purple-600 h-2.5 rounded-full" style="width: 0%" id="queue-progress"></div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
              <button id="upload-all" class="bg-purple-600 text-white px-4 py-2 rounded-full" disabled
                onclick="uploadAllFiles()">
                Upload All
              </button>
              <button id="cancel-all" class="bg-yellow-500 text-white px-4 py-2 rounded-full" disabled
                onclick="cancelAllFiles()">
                Cancel All
              </button>
              <button id="remove-all" class="bg-red-600 text-white px-4 py-2 rounded-full" disabled
                onclick="removeAllFiles()">
                Remove All
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>