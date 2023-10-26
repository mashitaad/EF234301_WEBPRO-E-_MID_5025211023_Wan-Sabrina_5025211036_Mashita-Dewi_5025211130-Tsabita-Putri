<x-admin-layout>
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <form enctype='multipart/form-data' action="{{(isset($package))?route('package.update',$package->package_id):route('package.store')}}" method="POST">
            <!-- Generate CSRF token -->
            @CSRF
            @if(isset($package))@method('PUT')@endif
            <div class="grid overflow-hidden grid-cols-2 grid-rows-none gap2">
                <div class="box">
                <div class="">
                        <label for="code" class="block text-sm font-medium text-gray-700">Code</label>
                        <input type="text" id="code" name="package_code" value="{{(isset($package))?$package->package_code:old('package_code')}}" placeholder="Code" required
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @error('package_code')
                                <div class="text-red-500 text-xs italic">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="package_name">Package Name</label>
                        <input type="text" id="package_name" name="package_name" value="{{(isset($package))?$package->package_name:old('package_name')}}" placeholder="Package Name" required
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @error('package_name')
                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="communities">Community</label>
                            <select id="communities" name="community_id" 
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">Choose Communities</option>
                                @foreach ($communities as $item)
                                        <option 
                                        {{(isset($package)&&$package->community_id==$item->community_id || old('community_id')==$item->community_id)?'selected':''}}
                                        value="{{$item->community_id}}"> {{$item->community_name}}</option>
                                @endforeach
                            </select>
                            @error('community_id')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="col-span-6 sm:col-span-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="package_desc">Package Description</label>
                        <textarea name="package_desc" id="alamat" cols="30" rows="2"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            {{(isset($package))?$package->package_desc:old('package_desc')}}
                        </textarea>
                            @error('package_desc')
                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="foto">Photo</label>
                        <input type="file" name="feature_img" id="foto"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @error('feature_img')
                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="px-4 py-3 bg-white text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center w-24 py-2 px-4 border border-transparant shadow-sm text-sm appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        Save
                    </button>
                    </div>
                </div>
            </div>
                <!-- <div class="px-2 py-8 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    
                </div>
                <hr>
                <div class="px-4 py-3 bg-white text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center w-24 py-2 px-4 border border-transparant shadow-sm text-sm appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    Save
                </button>
                </div> -->
            </form>
        </div>
    </div>
</x-admin-layout>

