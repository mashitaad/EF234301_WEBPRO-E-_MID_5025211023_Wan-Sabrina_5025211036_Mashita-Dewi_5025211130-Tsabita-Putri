<x-admin-layout>
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6>{{$title}}</h6>
        </div>
        <div>
            <form enctype='multipart/form-data' action="{{route('package.store')}}" method="POST" class="w-full max-w-lg p-6">
                <!-- Generate CSRF token -->
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="package_code">
                            Code
                        </label>
                        <input type="text" id="package_code" name="package_code" placeholder="Code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @error('package_code')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="package_name">
                            Package Name
                        </label>
                        <input type="text" id="package_name" name="package_name" placeholder="Package Name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @error('package_name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="community_id">Community Name</label>
                        <select id="community_id" name="community_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="community_1">Pilih Community</option>
                            @foreach ($communities as $item)
                            <option value="{{$item->community_id}}"> {{$item->community_name}}</option>
                            @endforeach
                        </select>
                        @error('community_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="package_desc">
                            Description
                        </label>
                        <textarea id="package_desc" name="package_desc" class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"></textarea>
                        @error('package_desc')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-7">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="feature_img">
                            Feature Image
                        </label>
                        <input type="file" id="feature_img" name="feature_img" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @error('feature_img')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md-w-1/3">
                        <button type="submit" class="bg-white mr-2 hover-bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-4 border border-gray-800 rounded shadow ml-3">
                            Save
                        </button>
                    </div>
                    <div class="md-w-2/3"></div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
