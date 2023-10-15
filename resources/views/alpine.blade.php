<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-600">
<div x-data="{
        inputType: 'password',
        buttonText: 'Show',

        changeType()
        {
            this.inputType = (this.inputType == 'password') ? 'text' : 'password';
            this.buttonText = (this.buttonText == 'Show') ? 'Hide' : 'Show';
        }
    }">
    <div class="flex h-screen">
        <div class="m-auto">
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Password Show & Hide</div>
                    <input x-bind:type="inputType" class="rounded p-2 h-full border-b border-blue-gray-200 bg-gray-100" placeholder="Type your password here">
                    <button @click="changeType" :class="inputType == 'password' ? 'bg-blue-500 hover:bg-blue-700' : 'bg-red-500 hover:bg-red-700'" class="my-2 text-white font-bold py-2 px-4 rounded" x-text="buttonText"></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
