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
            class="bg-purple-600 text-white px-4 py-2 rounded-full flex items-center justify-center space-x-2"
            onclick="document.getElementById('single-file-input').click()">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Single File</span>
          </button>
        </div>
        <input type="file" id="single-file-input" class="hidden" accept="image/jpeg, image/png"
          onchange="handleSingleFileUpload(event)" />
        <div id="drop-zone"
          class="border-2 border-dashed border-purple-300 bg-gray-50 p-6 rounded-lg flex items-center justify-center mb-4"
          style="height: 200px">
          <span class="text-gray-500">Drop your files here</span>
        </div>
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" id="name"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
            oninput="checkInputFields()">
        </div>
        <div class="mb-4">
          <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
          <select id="position"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
            oninput="checkInputFields()">
            <option value="">Select Position</option>
            <option value="Manager">Manager</option>
            <option value="Developer">Developer</option>
            <option value="Designer">Designer</option>
            <option value="Tester">Tester</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea id="description" rows="3"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
            oninput="checkInputFields()"></textarea>
        </div>
        <div class="mb-4">
          <button id="apply-btn" onclick="applyData()" class="bg-gray-400 text-white px-4 py-2 rounded-full"
            disabled>Apply</button>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden mb-4">
          <table class="min-w-full bg-white">
            <thead>
              <tr>
                <th class="py-2 px-4 border-b text-left text-sm sm:text-base">Name</th>
                <th class="py-2 px-4 border-b text-left text-sm sm:text-base">Position</th>
                <th class="py-2 px-4 border-b text-left text-sm sm:text-base">Description</th>
                <th class="py-2 px-4 border-b text-left text-sm sm:text-base">Status</th>
                <th class="py-2 px-4 border-b text-left text-sm sm:text-base">Actions</th>
              </tr>
            </thead>
            <tbody id="file-queue">
              <tr id="empty-row" class="bg-gray-200">
                <td class="py-2 px-4 border-b text-sm sm:text-base" colspan="5">Que is empty</td>
              </tr>
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
            <button id="upload-all" class="bg-gray-400 text-white px-4 py-2 rounded-full" disabled
              onclick="uploadAllFiles()">Upload All</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>