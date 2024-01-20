<div>
    <div class=" w-full">
        <div class=" w-full">
            <div @click="open = true" class=" flex justify-end">
                <button class=" text-sm text-[#287D3C] bg-[#D3F3DF] border border-[#287D3C] rounded px-1 active-btn">Active</button>
            </div>
            <div class=" flex justify-center">
                <img src="/images/profile.png" alt="" class=" w-[85px] h-[85px]">
            </div>
            <div class=" text-center mt-2">
                <div><span class=" text-[#6B7280] font-medium">EMP001</span> <span class=" text-[#172B4D] font-medium">-
                        {{ $getRecord()->name }}</span></div>
                <h3 class=" text-sm text-[#6B7280] mt-1">Sales Manager</h3>
            </div>
            <div class=" bg-[#F5F8FF] py-2 px-3 mt-5 w-full rounded card">
                <div class=" flex items-center gap-x-3 w-full">
                    <img src="/icon/profile-2.svg" alt="">
                    <h4 class=" text-[#09101D]">UI/UX Designer</h4>
                </div>
                <div class=" flex items-center gap-x-3 mt-3 w-full">
                    <img src="/icon/message.svg" alt="">
                    <h4 class=" text-[#09101D] truncate">jan.schmidt@example.com</h4>
                </div>
                <div class=" flex items-center gap-x-3 mt-3 w-full">
                    <img src="/icon/phone.svg" alt="">
                    <h4 class=" text-[#09101D]">+1 555-123-4567</h4>
                </div>
            </div>
        </div>
    </div>
    
</div>
