<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NorvusMall || Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Tailwinds -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="fixed top-0 left-0 px-6 py-4 sm:block">
                <i class="bi bi-phone text-sm font-thin text-gray-700 dark:text-gray-500 not-italic hover:text-norvus-101"> NorvusMall App</i>
            </div>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-thin text-gray-700 dark:text-gray-500 no-underline hover:text-norvus-101">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-thin text-gray-700 dark:text-gray-500 no-underline hover:text-norvus-101">Masuk</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm font-thin text-gray-700 dark:text-gray-500 no-underline hover:text-norvus-101">Daftar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 388 271" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <image id="image0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYQAAAEPCAYAAABCyrPIAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
                        CXBIWXMAAAsSAAALEgHS3X78AACAAElEQVR42u19eZwcZZ3+87519TUzPVdmJufkIEA4EgQVRSAI
                        6MouS3S9Vl2IeLFewLoe65lVEXV/SsRjXS/CeiCgEnBVlCsKIghIuAIh1+SezGTuvup6398fVd1d
                        3V3dU93TPd09U08+lZ5+q7rqrev7vN/zJZxz+PABAMOHD68DEC3nN92LFm2rd799+PBRHRCfEOYm
                        jmWFez8B+u3m9en1dtuyahwr7wma4MB2x7pt4AAHxgFs5wAWLvZJxIePRoRPCE2Mw4cOr4ct8Amw
                        DkCUAOeDAMSxHXH5LfFyAI/gJb5z+z/u+G4tBBz4o71+GwfGmUUk25cvWThep0vqw8e8hk8ITYB9
                        B4+sI8A6AvQTgvU2ASwjtpglyAp4Yv/XJISQs57Z2zBggnNsZ5ZGsZ0DAyctXbhtFi+5Dx/zEj4h
                        NBh2HjjST4B1FFhnC//z0wKfACDE8ffcJQRwbn/aC+MEHHiKAdsYsJ1xbDujv2+g9nfEh4/5A58Q
                        6oyn9h/tF4D1BFhPCdZT8GUEAEW+8PcJIb0NA8Cs30yYwDbGyTYObDt7ee/2Wt4rHz7mOnxCmGU8
                        um8wSglfT4ENArCeECwTYAloSgAKDp8QPBMCTMc6E5hgHNtMYCvj2Pbqlb0DNbqNPnzMSfiEMAv4
                        497BdQKwXiDYSIG1lHBQAAIsAe8TQtUIAYw7P8lTaYK4ZFXPthrcWh8+5hR8QqgRfr/72DqBYKMA
                        voHaWoBALEHvE8KsEUL2OzBhcmw1Qba+4YQFW6t9v334mAvwCaGK2LpraJ0AvlEg2CAAywQCCOCg
                        ttD3CaGuhADTbjM5JgyOrQzY+vYTfXLw4SMNnxBmiJ/sHOoXCa4RgA0SwTIBHIKDAHxCQCMSAgx7
                        /wYnEyaw1eTY/J6Tu7dX9eHw4aPJ4BNCBfju88NREdggElwjEr5WtIW6ZBOATwh5fzc2IcC01xnA
                        fpOTzTrH1mtP6Rqo4iXy4aMp4BNCGbjhuePrJIsENohAm0gAkXD4hFD8e5MRAkxOoFu/uVPnZMt/
                        nNq5tYqXyoePhoZPCB5w3bMjG2XCrxGBtVKaBAD4hGBhjhICdE5gcuzXgc0mx5Yvnt45XsXL5sNH
                        w8EnhCL42FOjUZHgGoXwa0SCNtkmAZ8QCjHHCQG6tX7C4GSrzrHpa+s6Bqp4+Xz4aBj4hJCH9z85
                        1q8QvkkiuEIkgGILfJ8QimOeEAIMe51hmZM2f+eM9m1VvIw+fNQdYr070Ci4/InxdQrh10gEV9S7
                        Lz4aHpcBuOw9fxv7o87Jpi1nRrfVu0M+fFQD854QXv/YRFQhfKtMcH69++Kj6XA+gAfe8cT4HzWO
                        a247K7q93h3y4WMmoPXuQANgG+CTgY8Z4XwA217/2ER/vTviw8dMMK81hEv/OnGNSLC23v1oBEwZ
                        BiZME8c1DQnOsCeVgiIIkKkAgRJwzqExBtU0sUAUsUCS0SVJaBUEhEWxqj6JJkUbgE0ANta7Iz58
                        VIp5TQgANtS7A/UABzCiaXg6NoW7h4dx/9goJEIQFkVEFQXtkozOgIJuJYCoTKBAgAmOKdPEqKri
                        kckJjKsaxnQNk5oGlTGcEo7gH7q7cVZbFH2KAoHMS4rYUO8O+PAxE8x3Qpg34AAOpVK45/hxfPPA
                        AACAEgIKQBIEBAUREUlEmySjXbHIoC8UQk8ggIAgIG4YCIk6KAEY5+AcSDETKUrBAOyIx/DM1KQd
                        4cNxcWcX3rl4MVaHI/NJe2irdwd8+JgJfEKY4zA5x6+HjuF7hw5iUFVBCYFMKURKERAEtEkSIpKE
                        nkAQS8JhRGXZWhxagkAJpnQd45qGTllBl6LiuJpCJCbhiBDHlK5j0jCgGQZ0zmFyjgdGR3D/6AhM
                        zvGZlavw6o4utIj+4+bDRyPDf0PnKEzOcdfQMXxhz247x4EgKIpolSR0ygr6QkF02VpAmyQhKsto
                        l2WERAkh0dIYZIFCJhSEAAFBQFiULA1CltEVUNAhy1ishjCuaRhOpTCpaxjTNMR0HSnThM45KOe4
                        fu8eXLd3D97c24f3Ll6KiE8MPnw0JPw3c44hrRGkiUAiBLIgoEWS0B+JYHmkBb3BoC38RQQEAQFB
                        gEgpFEohC5b2AFjJXToYwACdczB79J9OIFMEAa2SDMXWNBKmiUldx7imYlRVMa7piBs6dMZgco5f
                        HBvEbYNH8abePnxg6XLI1A9y8+GjkeATwhzCzngM//bC8xjSVEiEICCK6FQU9AVD6AsFsSwcQZss
                        IygIGbMRJQQG4zCYgUnGIVINAiFQTQaBEgSoAEoAg3OkTBMxXceELfQnNR1xw4RAAEmgMBiDIlB0
                        KwG0iDKisoZRVcWYpkE1DWiMwQTwy2ODuO3oEVx/4hqc19E5n3wMPnw0NHxCmAMwOcend+3EvSPH
                        IdimoS5FweJQGEsjYXQpAYRFESFRhGSPypOmCU3ToTITI6qKhGFgTNUgCmkSsPYTEASIJBt2GjcM
                        y2eg64gZOhKmCQCZbRR7e5EIkChFh6JAESgmdR1xw4BqmtAZA6UUn37xeZwcacHXTzwFYd+M5MNH
                        3eG/hU2Og6kU3v/cMxjSVCiCgIgkYWEwiJUtLegOBBARJciUQqIUjHNM6TpGVRXHVcuskzQNJE0T
                        JuegIAgIFEFRREgQkTJNSNTyIQCAySxSSBpmxgxEOIfOGDRY0UUJ0wTnHAKhlslKoBBAEBFFiIQi
                        QQ0kDCPz++fjMbz2iUdw3Qkn49yOznpfTh8+5jV8Qmhi3Dk0iOv27M5oBQuDQSwKhdEbCqJNskxD
                        ArEKv8UNA8OpFIZSKRxXU0iZJphdWS4dfkoJAQEB54BmMnBwqCxr0OG2D8GwCyJSAELa3wCLENJ/
                        m5yBcUDjDOAchBAQWM5pAJbTmTFQzmEwhk/veh5v6OnDh/tX1vuy+vAxb+ETQhOCA7hhYA9uPXrE
                        SiiTJPQFQ1jeEkGHrCAoWKNxDiBhmBjXVAylUhhOpaAxExyW8BcJscjAFtYCpaDEEvwGGLhNBsRx
                        XO5wKguUgnOeWc84B+MAI1Z0EeeWOYsR6zO9DYEV+gr7t4RSEM5xx9AgRnQN/7HyRMjEdzj78DHb
                        8AmhycABfObF53HfyHHIlKJNlrE0HEZfMIhWWYYiUNsJzDCS1DCUSmFc06CaJhg4BJsABFsboAQ5
                        hCAAmRrbaeHN8o6fhmhrFialdolqbpel5pm/qR2dRMHB7DrXHNZ+RZsICOcgjIEA+NPYKJ7b/jh+
                        vPasjL/Dhw8fswOfEJoIaTJ4YOQ4AqKILlnBwlAQC4LBjI0+bR46rlrmoaRhgAMQCIFMaEYjEAgB
                        tQmB2OQgEMD6yyIJAPa33D4AFmdwEFsbsIQ8T2sIyIaoCpxY/ok0MVAOwhkoBwi3CYFxEIoMMYwa
                        Oi5/+glsOf1MPzTVh49ZhE8ITQIO4LO7LDKQBQELFAVL02GkdlSQyRnGUzqOpzRMGhpMxkAIgeQk
                        gRztIP23rSU4CcEexXMAILnT7XBwUJqe4MYyDVlaga0l2IQg2KRAOEC5NckMsYnAtImAgoNQZpED
                        YwClAGMY0TVc4ZOCDx+zCp8QmgTfGNiD+0eOQ6IU7bKMhaEQIpJoCUtCkDJMjOlW3L9qmvaIn0Kk
                        WcGfJgSK7N+EwNIUYM3YRkAyTmDOLe0ByH6mwUmWEJiDENKOZ0bSGoL1mdYSMguziMCyNVEAWTJI
                        f47qGj76wjPYvMYvSOvDx2zAJ4QmwK+HBnH7oOVAjogieoNBREQJoh3aqZomhlJJTGgaOAcozTqM
                        RUJzNINcYrBJwBb8hDMQzsEZA5gJwoET2ztABQpCCA4mEkiaJmCTBWxSYIQADg2B2lpCVkPIEkGh
                        VpD7NyhySOGFeAxf3PU8PrVqTb1vgw8fcx4+ITQ4DqWS+MreXRYZyDL6AgG0SlLGXzCp6xjVVMR1
                        w5qfmdokQC3BbxEDhZhnMqKw52LmDDCZZa5hJla3tuEVfX04saMTnaFQQX+ShoFd4+N4anQEfz1+
                        HKDEmh+Z2PMXO7UCcGv+aGb9TWwiMNP+A8aBHDJglrbgIAXOGB4aH8Wfx47jle1d9b4dPnzMafiE
                        0MAwOcfVO56BYJeh6FIUtMoKRELBwBHTLDLQ7TITom0iEmzNgBICkWb/FgiBANtfwDlgGoCuw1Q1
                        rOvoxD+ffho6Q+GSfQqKIk7v6sLpXV1444qVuPvgAWw7dgwAASdWQlraPJQmBkodGgKHpRXAQQBg
                        NgnQHFLgjIHbpqov7n4eP1n3ckQlud63xYePOQufEBoYn9/9AoY1FQFRRIei2GYiKyQ0pusY0zUY
                        Rcgg00ZIRlsQYPsLOAc3dJjJJGRNw3vPeAnOXLK04PhD4+MYmpiwzEmEIBwIYFl3d2Z9UBTx+uUr
                        8PIFPbjpxZ0Y0TVw2z9h5pmLLHMUQBgFsSON0gRAeNp3ACv3wf7khILbxMAIwdU7tmPL2pfV+7b4
                        8DFn4RNCg2JXPJaJKGoRRUTsOkSUECQNA2OaDoOZECnNIQOJUsuZbBNBmhQoAIHYeQGGDjMeh5hM
                        4qPnX4BlXVlTzND4OO578knc9+TfMDQ+bpEBpVb+AGcIBwI4e80p+OcLLkB3aysAYGE4jI+cdjq+
                        +8LzOJxMgKcjmDiHwW0TEaO278AmB0Ytp3KeQ5kT67tFBswmBgJOKUZ1DbcdOYg3LVxS79vjw8ec
                        hE8IDQiTc3zyxR2WqcguXS1TyzlscIYJXYfOzIzDOJ8MJEoypCBSAiEdRcQ5uG6AxeIQ4nF8/NUX
                        5pDBLfffj98+/hg0ziGIItraOwBYRMAME1oqhUQigXsfeQT3PfZXbDjvfLxl/XqEZBkBUcRVJ52M
                        7+18AUdSSSthzfYVWBFFdgKaTQZZ01CWFDixvnNGbM2gUEv48eEBXNLThyD1H10fPqoN/61qQNw9
                        fMwyFdkT2FsVRyk4OJKGaZWmdmgAGTORCxmIxMo+JpwBhgEzHoc2Po73v+KVGTJIpFL45p134qmD
                        BxFobUVrJAJZCUAQrbpDzDShqypSUzGkYlNIxuLQNRVbtz2AHfsH8PkrNiJok8Llq07At57fgYRp
                        ghCSpxUAQCEZcMf3DAnA8h+wTAKc7bgmBJtefA5fOckPRfXho9rwCaHBYHKO/7fPiiqyqo4KEOyI
                        opRpImEYoAQFZiHBDjXNkoH9mQ4r1Q3o8TjU8XG8rKcHZ61YkTnm17duxb7xcXQtXIhQawuC4TBE
                        WQa1E8I44zB0DWo8jvj4BOJjo4iNj0NNJLF73wA23XwzNl1xBYKyjKii4MLePtx95LClJaTDWR2+
                        g3wNgeeTQd7fjFkaELMd4zvjUziqJtGrBOt9u3z4mFPwU0AbDHcPH7PLRgsICoLtN7AmqEkappUB
                        nB9CSnJJQUx/EkAAgcBMMFWFPjGB1NgY/umlWcfsnX/9K46ZBnqWLEb3wj50LFiAto4OtLa2orW1
                        FW1tbWhra0W0vR2d3d3o7utFZ28vol1dCIXDoATYvX8AX7v99sw+X9Hbiw5ZhmiX3RaJ/Znj/HZ8
                        Os6Bup5bbg6FQAhu2PdivW+VDx9zDr6G0EAwOcfXbO0gYJOBQKzicpphwODZ4nSiw2GcJYBcoSuC
                        gHIGU7OcyKmJCbxy6TJ0t7UBAEampvCngX3o7OlBuKUFSiAASZJAKQWlVtJbOkOZMwYmy5AlCZIo
                        QhRECHaZCzWZwDMv7sSfd+zAOWusBLIL+vpw58GDmWqmYAyu5iLCwCkBt/8WKclqB4SB2TkOpq39
                        mIRDAPCirSUs8LUEHz6qhlknhDWrr1wHIOpoGtjx4o8G6n0hGgG/t7UDkVJriktCQUBgMgaNsUxh
                        OjFnBE0LTEZC+hN2ASFdhx6PQ5+K4aUnrMoe79ln0dbRgZZoFIFgEKIgQBAER0lskiljxO1y1TIV
                        IKc1F84BzjAxwqCrGn5x//0ZQjgx2g7h4EFQauUlwEEKnDg+bTJAhhjS/gLL3CQgaypixCrSl9aS
                        fnxoAB9ZeXK9b1tDYOnVv4mCkHXWNys0+cANr9tW7375aC7MCiGsWX3lRgAbAFxWZP0EgK0ANu94
                        8Ufb631R6oUfH94PakcLpec7ZrBmJANQxFRUWLhOoAQiLD8DmA5N1WAmEjBSSbzspKwAHZiaQmu0
                        DcFQCLIoglIKgdJMWew0ITjnO7C0j6BVFI/ZjmpVQ8wcx9DxYRwcHsaS7m4ogoDl4QgOJBOWL8JR
                        jsIS/LZwt6ussozwp2CEZ4Q/R1o7IJZ2YGsJlHP8ZXwEGmMQiVDvW1cXLP3w//UDuAaEbACwrGD9
                        tXcDBE8BZAsIthz42mvH691nH42NmvoQ1qy+csOa1VcOALgJRcjARhuAKwA8uWb1ldvWrL6yv94X
                        ZrZxJJXEsKbaYaQ0U3hOZwwG45nvgos9Pb1kEtNgJ6NxDpgmoGswUipOXZKN3987PAwxGEAgGIQi
                        ihDtUb9oV0cVXRaJUsiiAEUUEQoE0NLSgtZoFJHWVsiyAsI4/rZzZ+YYPYqSKZMhUpo5twKHeD6h
                        5dVcEuzEOOs7cspv/G1itN63btax7EN3RZd+6NebAewDcDVcyMCBtQBuADCw5CN/uKbefffR2KgZ
                        IaxZfeVmAHeg9MPqhvMBbF+z+soN9bsss48/jR63fQOWA5bCmsPYYPZ0lTYZUMeSK0St8FLKuZVz
                        wDjAGIhhgOs6YOg5xzs4PoaALFv5DQBEu9REehHtJb9N4BwiAIlSBGQZoVAQkUgYiiKDUoL9R45k
                        jqFQCmKamX5liMuZPe1KAjQj+NOVWbPVWbMEQQnBTQf31vvWzSqWffCudQC2wSKCctAG4IYl//6H
                        bUv+/Z5ovc/DR2OiJiajNauv3AJrxO8KFgyBKwHQeAxE19w2aQNwx5rVV16748Ufba73Rao1OIAf
                        HdqXGYlbheesJDTOeUZjyJ/cJmcUDQDcIgGm6zAZw8JAEFIgCLW1FUnGsDjanjlmeyiExZoGWVYy
                        JbIpsnMiUAIg85nbVw7Lp6DLiqUlLOhBBxWQiE2hy85eBoAWQcAiWQYEAZxSMEqxNxaDAIARCk4A
                        RphtDrJMRpZZyPIbpP82uT2ZD7Lhp+lrMaJr0BibF7OrLfvgXethmVbbim1DpiZAqAgWiRTb5HwA
                        25Z89J71B//r4vF6n5OPxkLVCcHWDArIwIx2gIki6MQoYGiAoYEB4C0t4MEwhKlJ0GQi/2c3rFl9
                        5bodL/5oY70vVC0xZpOic9QP2IXhXIiAOOYzyJIBAzFNGCkVRiqF161ahUtOKu5wPX3RYpy+aHFN
                        z+v0vj6c3teX0/bixARu2bfXJoXc/AKeEfg8owmYhNvagq0xcHtyHyCzPDkxipfN8Uqoyz5w50YQ
                        clN+OzF0kNgEeDACHgiCt7RlZ7VLxABNBS+8NmthaRnr6n1ePhoLVR1WrVl95XrkqbJckqF3LQDi
                        kxYZ5IGkkqBjx8HAYXT3uO32ijWrr9y+ZvWV0XpfrFrh+dikJdhtpy4AGPZQPD0ydiOCbDSQNfWk
                        mUpBHRtH7NgxvKzGwr5SrG5rQ8g2ibnO4oZcc1jughxySJuN/jw2XO/TqimWfeDOLbD8cDkgUxPW
                        tKXRTnAlUPA7Ho6AtXcBiRhIfCp/9dolH713U73PzUdjodp69hbnFy7JMMNhVyLIBzF0kPER6Atc
                        SWEtgG12yOqcw7aRYXvaSvtawJp5jNjCj+QIQtg2dPs7LLMKN0wYyRRSE+OYGj6OrpaWep9WUfQq
                        il1sL+sozxH8DgJ0/l34z7pWj8xRQlj2/juiyz6wdRtcNG46PgIebgHE6ZV8Hm4BD4RAC0nhmiUf
                        vTda7/P00TioGiHYTuAcB7LRFnUbmZTu0NgI9I4u8MK692lSWF+XK1VD/Gl0ODPapchOTUlcRsnp
                        ae+dmoM1tQAD1zToiSRkZhY91sCRIzmO31rgwJEj+NPjjxddzxnLEKBgO5BJ3ujfqRU417ltRwhB
                        3DTqcetqhmXvv2MdLLPO+fnr6NhxsLb2svbHRQlckkD0nOCCNgDX1PtcfTQOqqkhbHB+MaPtnjQD
                        105NjcMMh8FaCnxnbQAesPMa5gTSgiw92k37Dpxtab8uQa6wzJIIAM7BTRPM0NHfvaDo8bb86le4
                        eesdNT2nH991J27eegcSqZTr+v6WVqvgHpBxoOdqAs5zL64bOLcbUlOe+tYMWPavv1oHiwxyKvgR
                        QwedGIXZ1lHRfnkgCDI1kd+8sd7n66NxUE2n8gbnFybJM2IbEp8CEyWgpQ208CG+ac3qK9fPBWez
                        ao+W0wsHMpPbu/1zMyERxsCZCW5aC+xENjd87N3vrvk5/dvGd2J4dBShQKDIFulQWpLxJRT4RVz8
                        BvmaQnriHkIIEnNEQ1j2r7/aCDd/gZoCTN1tkFQWeLjAlLhsycfu6z/41QsH6n3uPuqPqmgItsM3
                        50klsckZ75cYOngqDqOrqLN5W7M7mw8lEzmCjQNW5QHHkiMU80fKtvOZ6SZMTQM3DJzqqGSaj1Ag
                        UEJQVwfBQABLFy4sur43FM7TAnK1oNw2d2IUMo5oa7u/jo/Myv2qJZZd9cvNcCEDmohZ2d3BcPk7
                        zQMPBEFSyfzm/nqfu4/GQLVMRuvyG0heItRMQCZGoC/odVt1Piy/Qn8Nrs2sIOYwGaU/84Wk1V5o
                        JiG2aYkbBkxNhZ5IwFDVkhpCIyAgii6aQPo7pl8ACKCQ7Czn/GvVbFj2vl9El131y61wSTaj4yNg
                        SgAQqqfMu+T+rKv3NfDRGGiabB46dhx614JizubtzRqB9MzkREaYcfs/d5u5u3C05rZkYKYJU9fB
                        DAML2stzOM42AoJQQjtw8xzkglACgcLKdraT9v46frzep1URlr3vF/2w/AUFpV3o2HGwyMxMRB4R
                        rfd18NEYaBpCAGA51MIhsGAof1UbrDpIG+vdx0qQ70PItBcI/9xfERCQdOqwaZECNxl6OipzOs4W
                        FoTDAOc5pjK3a1GoJWUd0ek5EqzsaitjudnQ/97b1wHYDjfn8dhxsNZovbvoY56hqQgBAEg8BgYO
                        Fml1W32TnSndlODp6KIiNpDiY2bAciRwgHOEg00wR4Dd18y5FSU+FJwzAezpQmlBaY1mQf97b98I
                        4Enk+94MHUgmZ+w89uGjEjQdIQC2s1lNwOjqdlt99ZrVV25tRmczh7tABNxt5MVs5ysWLar3qUyL
                        RaGgbSLjBetKEwNsvwPsMNXm8x/0v/e2TXB1HsfBTQO8UAP24WNW0JSEkAaZGCtW7uIyNLmzec6D
                        c1cy8IK0A5qDo7I91Af977k12v+e27YA+FzBOY2PgAm0qs5jHz7KRVMTAgCr3EV3D7gk5a9qSmdz
                        MRnJPbatKBHu2UholWRwXlygu12HTPZ2ngmJVUgss4n+d98aheU8LixDMXbcyg/wycBHndH0hABY
                        oyszFHYjhTZYmsLGevexHPC0ozi/3WVMbCWycTBmlcoO1zjHoFpoCyiu5+2mODjP2/IfWDkZHMhk
                        dTcy+t/983UABpDnPAZsMmhpLXeXPnzUBHOCEACr1C8TBTdncxssZ/OmevfRiZAsobs1jAsXL8rO
                        MZC3TSkBmRaTjFnRRcw0wZiJ7vZovU/NEwKCYGkImcV5fih6TUhmAp1cz8Hb+1dgaXsEbUEZjYT+
                        d/18IyzNINdLbBhWtdKITwY+GgdzS0c1DHAARmc3xJGCCpifs30K1+x48Ufjs901kVJ0hRVEgzLa
                        QwEIdnjMQjO3Bg/P+5dp54ULS0+IY+gwNA2mYWBBtLFzENLoCYcLhH7u3y5XwZ77QaTpLG2SIRRZ
                        oFgSjWBJ1Nr0eFzFSFLDsbiKmG567lc10f+uWzYBpMBfQBIxgHHwQBNEg/mYV5hbhABYI69Jy9ks
                        Dh/LX3sFgHV2HaTxWnclKAroCSvobQ0iIrtf6r5gyFUougnGrG5gmYk4IWCGAT2lQrWzlJlZH+FX
                        Nnj+OTv+2RpD/kI4IFArQ9ngtoYEgAE4O6+gX1dYQVdYwYldLZhUDYwkNeyfTGJUnZ3r03/lLVtA
                        Cv0FZHIMXFYAee69ej6aH3P2qSTjI9C7FkA6PpS/ai2AgTWrr1y/8ic3VP24rYqIZa1B9EQUBEWh
                        6HbjiRSioQA6FCXPdMIdGoC1ba4JJUsPjNsT4xgGDE2Does4fdWqel96T+gJh2GaJrgggHGeSUtg
                        PJ8Us2dMiJWQJlICw2QwOQOzHdNtsuU/GkuoaAnIEB0JCq2KiFZFxPJoCAnDxOEpFXsmUhhRq18Q
                        r/+dP42CkG0AcfEXjICFI8Vji334qDPmLCEAVmaz0RaFkIi71YHfNv67Pw52XXJ+hXvPIiwJWBJR
                        sLo9iFARElANE6MJFVNJDRPJJCiAM/v70CpJLjbzrBC0hKVzsQUn7FpGjME0TTDDtARskwRiBkQR
                        JmOWloNCU1muXmRBIAQCzRYBNBwkeoptKjs4Ecfo4BhCsoSucADdIQUtSvYxD4kCTmgP4YT2EOK6
                        iQMxDTsnUhhOzpwckscnASvzeFn+OjI2DBb2/QU+GhtzmhAAy15rKgFQJQiaW4G1beSnW9sECvS+
                        7ryy9ysLBCtaFJzSEUS74n4ZpzQDxyaTmEhpSGq6FR0DFGTXvm7hItwzeLSAGNxt7E67uiUMGecw
                        mQnOOVY16NSZbmgRBIwD4JyB2dpBeuGZv3kmrFQkBHJ6ilHGYHJukwnQkhdhFlN1TKgGdo3EIEsC
                        OoKyZb4LZ6ObwpKAk9uDOLk9iJhu4qnRJPZM6hjRyjcrje0dxN77ngLyycAwQJIxt7LTPnw0HOY8
                        IQBWLXkuijDaOyGO5ZZJHvrxVuj7D2Plv/6zp30tCktYE1VwYpt7eOekauDwVBLDcRWaYUKANUm8
                        UGKfr+pegD8cPVKgDXDOi7RZGoJlXsn1MDRF2QobbZKMETVln0uxc86WqpAFASKl0BmDzjkMZm1z
                        wYLektnKSd3EQT2JgYkkKKXoDSvoiyhYHMmSQ0QScE5PBOf0AHumNOya1PDkmOrpPI5s34d9Dz4H
                        nmcKIok4YOi+89hH02BeEAIAa6QWm4DRtQBinl9h7E+PYcf+wzjts++HFCl8eQMCwRntAZzVGUSr
                        VBipG9dN7J9M4dBUCqpuQLAJQPBoKn5ZZ3dRx3J6wpzcETTPxuA7RtQ90cYuapcPmVIrbJYQS8vh
                        3KpTZS9OXUikBAqlEAlBinFopgmdW1rCxT19no+pM46ByRR2T6QgUoL+tiBWtgXQ4dDyVrbIWNki
                        44LeMB4dSeGJsRRGVPeS4i/cux3Hnj9U0E5jk+ACBVeaIy/Ehw9gPhGCDTIx6upsTuw/gu0f/xpO
                        ++g7oSy3sn3bZYrX9ARxUqsMJU+6a4zjwJSKfZMpjCQ1CACkaTSBYlgaDpfUDjjJCsi0sDRtpiCM
                        wTQZGGcNX/Y6HwsjETwbm4IJZM7PtJ3qTnMRJRQBKkCmIjg4dMagMWYl4wE4pcz5hdPQGMeO0SSe
                        GU0iJApY0xHE8hYFLTbpKwLBeQuCOG9BEM9PanhwWMXOKcsXpas6nrjrcYwdKZwmlo6PWvWIfN+x
                        jybDvCMEwHY2t3dAmJrKmchHPT6G7f/5HVz8kXfgqte/DCsi7pfngSNTOBhTwRiHSDjEGb74BMB5
                        Hd14eOx4jqkkPfI3OQfNN6UQAJwBpmlFGZlmU5RwcCJNAAyAmf7bPt/0NaAgkAhFQBQgCQRJwyID
                        jTEwAO2SjC5FmWlXMKWb+POxGP40GMfSiIyLF7Ug6BgEnNwq4+RWGUeSJm55ehA3/+IxTA1PFUQM
                        0dFh31/go2kxZzKVywWJTcJU5AK7r5FI4Xdf+AGe+sOjOe1xI2sy2DmRgmZWV/i+deGSTEw9Bxya
                        QG5IZlpYGoyDmSZ0XYeuqTB0A2tLTJ3ZiFgYicBMm4oyJOggPVh5BwGRIiAIoAB0ZiJlGtAZg8EY
                        3tS3pOr92jOl4XgqG3WUctzrAwPDuPmmBzE1nDdFLOcgyTh4KFLvy+rDR8WYlxpCGkRTwUQB1DAz
                        01Gm8alP/BCPPPI8Lvn3t+PxkSTevLQFYbF2/LkyFHEJMeVgJEsMlHMInMBkDJQQ6LoBU7WS0nRV
                        BWvwqTPzERREy3eArIbgJAiRALJAERZFSJRCNU2kTIakacK0o4xe0lZ7v8kNO8dwYouMqd1Hsemm
                        h2FNeu3YgDFA1/z8Ah9Nj3mrITjBRAGcFl6KX299GJ9939cwOZmoeR8IgH9bvjobRppPDMi2m5xb
                        ApGZMHS7bIWu44TFjT8PghMdwQCMvPNNfwKARClaRBEhUYQAAtVkSBgGNMZgcI7VkVa0S7WvXZQy
                        Ob79s0ex6UcPF65kDNBSlvnOh48mh08INphAwYRCl/Dwc3tx72e+iz07D9a8D+d1dmUEPs8Tkvmj
                        Z4MxmIzBME0YhgnDNDAZrz1xVRW2CczgHCbjMLjlHGewaj+FRQktkgSZUpicI2EYSJgGVNOEwTne
                        s6T2JrLJhIbf/+xh7H3W5f6bBqAmK57XwYePRoNPCA5wSsBcMo3HBo7go+/+Gv766As1PX5EEPH6
                        3oWWk9VFUzCLfDIAnBD87P77EEsm630ZPeOOPbth2qGjzgXgCAoCWiUJQUEEAUHSNBEzDMQNy3/Q
                        IclYXmN7/aHhGN76xd/h2MGRwpWaBmje8hR8+GgWzGsfghs4sUiBmixn5BePJbHxX76K6778LuDk
                        1TU7/sbFy7D12FGYAARbQKY/qW1nz0wbyQEuUEASQSQJLx4dxKWf+iROXLQYlAIUFMQx1SQllu3b
                        mpjeMSUlkPM9bR8nReImC6qwwq6/BEc2Nbcc47A/OQcgCBACCpS2KKYCCiYDAUBRYILB4IDJLHIL
                        UIpWWUZEkiAQgqSuI24YiBk6VNOEyTmu7l9d06jOXQdHcc3X7sVUUkOOw4BzQFcB0/R9Bj7mHHxC
                        cAEnBGYJZ/PJrz4Tr7v6zTU5dkQQsaGnD3cdO2oJf5sMiE0IhLOMGBcpBZdlCKEQRE0DpRRJTcNT
                        hw/ZJTIIBFv4C8SqASQ4yIA6yYEQx5zFVl+ICyVka67a321CSCfLpYnAiozK+j4YACKKEENhBAwd
                        gQU9EINW0pbBOEy7cqlECFolGe2yDIUKUJmJhGFgStcR1y3toF2ScUoNJ6F//umDuPH/nkSB85gz
                        EC0Fzjn8JAMfcxE+IZRAWlMgedE7z9//BLR4Ev9wzZshRqqfifreJctxx+ARUDuyyLA/TXBQDpjE
                        EtSmQEEDQQjRNlBJBAuFAE0DMZkl7G0CEGxtId2WWWxSyExcbwu5dK0lQooQAueOvwFn9VXmIAjT
                        LlFtMoATgAsChGAQYmsbSEABo4IdZWRtTwAEBQkdioKwaEUgpUwTU7qGCV2DyizfwRdPPBUE7lOI
                        zhTb/vAMnvjrvkJ5zxiImrKO6msGPuYofEKYBkywzS5mLinseXQHbvnk/+BNn74cnT3VzRBWKMUX
                        Vq/Bpl3PZ8JNDcZAKEA4BWEchHAQSkEkCUJLC4gSBG1RAcMEBYcAAtEW/IK95P+d1hgoLBlHCcmQ
                        Q/rTDc65kDPZ1LCT6PIqtJocYGAwuaV5QZZBAgogK2CUWH4Dm1DCooioIqNVkiFSiklNw7imYUTT
                        MKXr0EwTf9/dhz4lmCkNXi2kUjp+fdeT2L1zEAVsYOggumb97XOBjzkMnxA8gFMKBgKaN/nM0L6j
                        +MGHv4Errn8vFq2o7uT2r2rvxEmRFrwQj4Hao2dqm44IGEAoCAcgWgXfiCSBsgBEcFBOIFKAEpqZ
                        P8AiA1pADJaPgWaqsLoRQloGZmot8WxZamexPWe57vyoKJNbNYtMEGsOBGr9bcIyvwQFAe2ygm4l
                        gKAoQDVNTOo6RlQV45qWiSzauLi/6vd3fDyB237+VwwNTRasI5oKGLp1FXzNwMcch08IHsEpASOW
                        X8EJNZ7C9z58IzZc8ya87OIzq3Y8AuCrJ56Cf3jiEVs7oBYZMG5pCulPDpiUgND0vAqWVOeEWgKd
                        Eos8bI2AOLQDZMxHtr+AZJ3PbhpChhgchMAc/g3G7Tka0sTlWLIOesuExMBgEoBwgqAoICor6A4E
                        0CrJ4OCYssnguJpCXNehMoYvnXiaVRCvivd1cHACW7b8Gaqq5wp8zkG0lBVa6hOBj3kCP+y0DHBC
                        YEpiQbkLANi6+Xb83/d+XdXjRUQRm08+zRGrz2DYYZrpT93O9DVs84xJAEYoOCUwKQEj1BqZOxbD
                        /mR53/O30QEYxG1JbwfHb2jmb5Y+NnX8TYjdT4ARa/pPmVC0KzJ6gyEsCgXRLisQCDCh6TiUiONw
                        Io4JTUPKNPEP3b04vcqO5CefPIAtWx6yyCDnRnOQVMLWDHz4mD/wNYQKUMzZ/PCdf8b4sTH880fe
                        hEi4Os7mM1rb8IaePtxx7KhDS2AAtXwJoLCyZSm1hvCcAMQK8xSAzLzDIkGmVpIAuy4S7Al7HAsA
                        EPCckFQn0gN9Z3gpR7YOUcaRnClUh4yfIO0rILC0gjZJRoeioE2SoNhTaU7qOg7GYzgQj2NEVZEy
                        DJwQjuB9S1dW9R7e98ALuH/bTvuEHWfJTJBU8+Ry+PBRTfgaQiWwcxXckth2PLID//3x7yMZT1Xt
                        cB/uX4nzOjph2M7l7CezQjY5t4u9WZpD+m/d/m5wqzqo1Wb9rdvbpZd0BVG9jEUzs79L/zZ9LN0+
                        lm7/bTIGzq3JgiKSiE5ZQXdAQVS2yMDkHBO6jsOJBA4lEhhVVaimiagk48t2VFE1kEzpuO1Xf8P9
                        D7gkGeoakEz4mcc+5i18QigbmZhMyzkqiQU25iP7juLz7/wvHN57tGpH3LTqJHSKkispZAgg72/D
                        IfQNxqAz0yKJHGGdL7xzCUI1C/9Wi5BHerv8/Vtag5U30SpJ6FQC6AwE0CLKEIk1A9q4puFIIo4D
                        iTiGUymkTBM6Y/juqeug0Oo8psmUjv/+wYN44skDhSt11S9D4WPewyeEspBOVCKZ71wQwWS5gBRS
                        8RRu/MQP8Mi9T1blyAIh+Pm6s1xJIeNTSAt7niYAW2uwtQVrMaEzs6SWoLlpAmb+tmbx7TPagmUi
                        EghBSBDRLivoUgLokBWERQGEAJpNBkeTCRyMJzCYSCJul7f+0WlnIiJUx6p5+OgEPv9fv8eRoxOF
                        dzWVANTqaXQ+fDQrfB+CZzjIIPNpkQCjFCygQFC1HL9CMp7Cj2/4FUaHxnDZ21894x4olOLnZ5yF
                        tz75OEYMPeM74IyBEwpOGTgIOCPghEIgACcMph1iyuyoIpPwzHcrYzk/usg9SzmNXP9Brg/Barc0
                        AoFYvoKgICIsimiRRAQFq5Q154DKTEzoGoZTKo4k4hhOqYgZVr7BltPORF8gUJXks6d3HMGPb/8b
                        UqodPpo5EW7Ne8z9MhQ+fAA+IXhEcTLIRBwRCtOFFADgNz97AKPHxvG2qy6ZsbNZoRS3nnEWvrB7
                        J7aNjdpkQMApMkTACMAIs6J8YCWfWdkLBJRbgtokPC9bmdgZytnSFvaZFsBJCHBkKXM7f5jAmi85
                        JIpokSSERRFBQYBMrfBXg1vmpzFNw1AyiWOpJMY0DXFdR5so4fvrzkKYilUJL73/od24/TdPO+6d
                        DWZamgHjfrKZDx82fEKYFl7IwEEKwSCopoHqRs5eHr5vOw7uG8R/fOVKRCIzm/JRoRRfXH0yPv3i
                        8xYpAOCMWX4NwkHsMt6cWWUW0hpCejE5yZaxyKttRDLf02efKy3TOco2F1hBTdZVsZPgKGQqIGBX
                        Kw2LImRKQQkBA6CbVm2icU3FUErFsJrCpKYhaZpYHQrjayedmtEgZoqbb3scDz9xoFDgG7pFBun7
                        68OHDwC1JARBtJJ6mhrlkEFWsDBFser2qLnlkQ/uG8RnPvjfuPazb0X/it6Z9gxfWn0S/jg2iv/Y
                        +bytJVArrJMxCHbimQliJY0hW42UcO4oVZGrIaQJIXucvGxl+1KkzUsCrExoiVIothYQoCICIoVC
                        BYh2eQqNWTOdxXQd45qG42rK0goMa36D1/f04f1Ll4MAM9YMEkkdX/3un3Dw6AQKBL6mgqhJ2y42
                        /8iAGLo/mY+PoqgZIahnvQrys0+AxKfqfY4VogIyINnIfS5JMAUBQtIuiGZjZGgcX/rEFrzv2g04
                        s7/Pc28opVAkCbIsQpYliIIISRLxtsWLcNEJq3Dp/ffhWDIJRgg4rNE6pxTEPrZVvA45lTrTBeXS
                        LQzZ0T6QjjjgthZhXQcB1jzHIiEQCbWJgEK2NQOREohEgECt/absaS9juo4pXceYpmLCJoKUaTmm
                        f3be+XhF9wIAQErVoBsGdMNEQtWgGQa0vOzwUth3aAzX/c+fMDJemEtAkgnAyCtnPY9ADB3KI9ug
                        n7yu3l3x0aCoGSFwQYR2ypkQB3ZCGKpO+OXswY0M7POajgwcUUhcEGCEQhBSSTirsSXiKdzwxVsR
                        0Bkuv/zCgqNTShGUJYQCMmRJgiJJEF1yHtJYEAjikUv+Ad9+4Xn817PPWPWEKLU/OSRKQe0EMkrt
                        ekZp01DG7JNbDhvI/i3YpqC0ySlNBBKllnaQrpFEbdIBh2pyqKaJuF26ekK3CtSliUBnDP+ychU+
                        ceppCDhmqgsoMgKKNS1merZkxhhSmoG4qiGh6UhoOlJ6IUnc8+hefPqb9yGRdClDkYgBzJyvXAA6
                        NQ7liYdBkvF6d8VHA6OGPgQOLgrQV60BBBHC0dpPQVkdFCMD4p0MMqRAAIHADIVBU0mQvOJ413/l
                        djy/8xA++9m3IRoJIhJQEJBEKLLkqaemacIwDBi6Ds44/rmzG//wilfhA88+hWdjMauUBJApMidT
                        ChkAsW36lumHQqAWIaQL31EAhObOpSDRbGE8kVBH1VS7L5zDNK0SGzpjmbLVk7ZmkDTNDBF0SjK+
                        ve50LAu3IDkVg0opFEUBpQSyVHjulFKEAjJCgez8yZphYiqlIa7pkAQBv7z/eXzsW/cVmoFME0SN
                        AyablyYiABCGjkB+5jEQ3S/F4aM0ZsWprC9fDRZugbR7R73PdxpUkQwywseKALJIIQWa91JuvfMR
                        vPDCIfzvln9DSzhYtGcpVYOu6dAMHaZhQlPVrDkI2YFvAMAPTz0dh1IpfG73i3g2FoNIiJW3QCk0
                        apl3JPtTsAvMCbapKV3ULlM6G9nqqOmZ16w5nwEDzjIVVi5EyjSRNEzETQMxXc+YhXTG0CXJ+Mzq
                        VVjX2gaAQFVVpFTVck5jKuM7kCQJsiRBEAUEbZKkeclpsiigMxJEJ4L46I334lfbXDKPDd0xIp6f
                        ZCDu3w35hafq3Q0fTQJXQhg6fHgdgA0A1ttNAwC2A9i6YNGiAU97zgsTMbt7wUMRyM/9rXGdzdUm
                        A+IQ2YSABYPgomiZkBx4YechbHjjdfj2N67CSScthqrpSKoaNF2HpunQdT1vqsvpxduSQAA/OvV0
                        HEylcOvgEdw2OAidMYiUQqUUkm0GEgmBTClEQiEK1PIREMsUlF5PQEBtaW1mi5aCwSprrZlWVrTK
                        GFTThGYyqMzMJKmd2tKCjyxbgdXhcPqnJfMLVF1HStMtR/jElJXcJliaU0CWEFJkRAIyJuMqrrr+
                        N3j0ucOFo39NBUnGrXs3TzUD+dknIBzeX/Hvjx0+HEVWDvTbzdsBbOtZtGhrvc/PR/VBuENwDx0+
                        vB7AFgDLSvzmZgCbnMSwZvWV6wE84Nwoft5r3A+opiDvfBokHqv3ued1zF24z5gMnNun5xcwTQgJ
                        u2aOY304HMAnP/sWnHrqksykNRkiQCEhuGkIeS6PTJvKGB4eH8OPjxzGM7EYBACibTqSKM04i9O+
                        BMs/QCHYOyOwumvY02LCrsDKnFnTjszpLknGuxYvxiuj7eiSZDh4JFOmO0MMdoJbWkNgSE/Fmd2e
                        cZLZhgHYe2gc37nlcew9PF5wX0gyDmiqHYZLHPcq7z457mHhdvn3Lft77mk7e1uXY7ltl3nWSm7n
                        CGoosR0xdMiPPwQ6NeH6qKsvXw+zszv71BDynwe/euGm9HqbCK6xl2IlZicAXNOzaNGWmb98PhoF
                        GQ1h6PDhjQBu8vCbKwBcMXT4cAExeAFXAtDWvATSnh2go8frff4WZoMMnOUuRBFmOAKaTOQkscXj
                        KXzqE/+LD19zKS6+6PSqnqJCKS7o6MQFHZ1QGcOzU1N4YGwEtx49CtUxRwK1eyo4/AzpxQQcs6Nl
                        Z0pLT4rz6s5OvKazC6dGWtAlW/Z+nvmvenh21xC+/IOHkUgVcR7P47LVdGoC0nN/K0oGpTAdEeTd
                        xjYANw0ePry+d9GijfU+bx/VAeGcl0MGbrj5ox+9+e7HHt99i7Mxce7F0/5QHNgFYfBQna/ALJGB
                        mzmKA0IiDmIYBce58KLTce21l1ZNQyg4bcffU4aBw2oKMdPEA6MjIAB2xGJ4JlaoxS2QFVzQ0Q4A
                        OLO1DS2iiNWhMCKimM1VcGzv1ADS32eiIdz76ABu/OlfC+8LZ5bWyczcezGPNAQ6PgL5qb9auQYl
                        kK8hLGiRvvHbd62KwhrsFdzDoshu9I3exYuu8fITH40NcuzQoSgsH0HFs49s374P11z7o5w2L4QA
                        AMLwIMQ9z9fp7KtFBunPMsjAQSI0kQDNzNmb/e2ppy7FZz/zRkTCgZoSQilEu7ogKVZm9fDhw67b
                        8BLfq0kIN/zkUdz/1/2F98Q0QOKTdkJFHjnPE0IQjh6CvMNbIcV8QnjP2d1479ldxX/gTcO7oHfx
                        om0eHysfDQqK0nbCypGeNnGaxezqsRJlqlTV0jMahAxACFg4DDMUKujis88ewMf/46fYu/fY7F6b
                        BkM8qeOL338I9z86ULhSS4FMTczrstXyju2eyaAkeJHF28+uqfd18DFzUFhRBGWhgmemJFhrFNqa
                        deChyOycdQORAWCN+JgShBlpybWJA9i7bwgf++TP8PQzLjX85wGOjcTxic3349GnC7UTkow3XnDC
                        LIIYBpQn/1KdHB/vgr/Yu39Zva+Hj5mDAlhbbGWFA4Zpfu2+8FAY2pq1YK3R2p5xRWSAmpJBev9M
                        VmC0toLT3KzkeFzFxz71M/zhvmdqe20aDHsPjeFD1/8e+9KRRGlwDhKbtCa0maegsUnITz4MOjZS
                        9X1X+t4fPXR4fb2vi4+ZgQIzFfxFUB4fWAsVoZ+0FmZXT23OtmIyKCbkq0UGDlu2IMGIRsFdTGhf
                        +8Zv8d/fv68216bBcM8j+/DB63+PeDLPQco5yNS4NcPZPIVFBo+Axiarts+qvfc+mhpiIz4AxoqT
                        wFujEPfurN5Oi5KBcz3qSgbZTwoj2g4hNgWi5Qq+O+56HMeGJvGxay5BS1jGXMR3b/8b7rj/xULP
                        t2mATo3nXvd5BuHYYUgvPF3vbmTQiPLDR+Wo4RSalagI2cXs6oF+0unVcTaXJAPSYGSQ3d5saQUL
                        F/pVHn50Fz7yyVswODRRu9tXB8QSGv7r5kdwx/2FAwGipkCnxue181jc83xdyaDqVgQfDYcZE0LR
                        B2NmfGCVRmiJQjvpdHB5BrOMNSkZpD9ZMASzpdDZvGffEN579f9i976hmd7ChkAsoeEjX78Pf/jL
                        3oJ1JBG3w0rnqQgyDEg7noR4eH9uCGqlyzSoiQnZR1PAMyGU/5BUgRHSzuZTzwAPhcs/uyIO4WYh
                        g8zvAkEYbR0FL3M8oeJ91/wv7r7/ufKvTQNh98ExvO2TW7H30FjuCs4tIpjHJZuJmoL8zGMQRmpH
                        /DMV/D5pzB24EoInwT+bwwdBhHbKS8pzNhcRvtUlA9ScDKzjEnBJhN7ZDS4WmtC+euPd2PLzh2t8
                        E2qDux/eg2u/do+783hydF5HEpF4DPJTj4AmYtXRDDxqCKXgaw5zG9M7lSu94zVQ743+E8CDYYgH
                        95becNbIwJtwnykZZLajgNHeCSE2BZpXMfXmn/8Fg0OT+NC7LpjxnM2zhS13PY2bf/10oZAyDDvZ
                        zJyxAGtWCMNHIe2uUwY/fEE/X5Edblb4BMz2g2P2LARXFEj7drmX0Z6rZOAgBbO1zSqjnZeU9fsH
                        dmD3vmF847o3oyXcuKQQS2j45q1P4O6HXYhdUx1lKOrd0/pAPDQA8dC+Wb0AM32PfQKZG6Blpqd7
                        Vxer40Jwdza3dUJbfVphBFLVyQA1JgMU7Q8vur11HBaOwHRJ4tszMIw3v/eH2LVvuBrPR9URS2i4
                        +r/uwd0P7ylcmYxbOQbz1XlsGpD27oR4eKC6JqICk1G1zUbpfc5TBp9DKPAhVC/CoIaMAA4eCkE9
                        7UzwoO1srgkZkDK2r4QM3Pc/HRmkt2PBIIyuboDk3sZ4QsWHP307fnd/Y81Qt+vAKK78z//D7oNj
                        BevI1ARIfKreXawfTAPy809DGB6sd08ycH/znMLfJ4G5hoZMTPMMQYR24qkQDw1YURjziAwy24sy
                        jK5uCOOjVhltG/GEiuu/9QcMDk/iyrecXe87hQefPIgv/fDPiKd05AgRzkAnxsCdJcDnGUgiDmnn
                        s4BpZJ+dGoK7HKJQDpTfj6aWJT4AVGFO5eJRSLP0eFABxtKVgKxAGDzcYGSAmpJBev9cEKF3dkGc
                        GAdNpXIuz023PoLBoUl88kPuM9jNBm6753l88+ePOc7HhqGDTo5bzuN5OtKkI0MQD+6r67Sy1pta
                        3vX3hf/chGdCaPQHwOhdDC4rEI8csCZJaQgy8Pa7ysnA2r9FfoIVgTQ5AZrIjdv/3QPPY9fAML75
                        +TciMsvO5i/94CH87s97C+QN0TWQCdt0ND+5AMLwUQiHBuxr0JgXodHfex/VRQ19CLMPs6Mb2sqT
                        rcJwJRy25ZpxvDiE60sG2e3NtijMaEfBtdk9cBzv/MjPsGtgdpzNsYSGjZ/5NX7350LnMUklQMZH
                        5q/zGIB4YE+WDBoEzfre+6geaDUegKImozosPBCEduLp4IFQ2WTgXainPxuLDNKfLBSG0d0L0Fy+
                        Hxyewoc++0s8+Ndp8jhmiF0HRrHxM3dh98HRgnVkctyKJJqvME1ILz4LOnYcNY0kKjMxbaYZyhzz
                        mt/nDMqqZdQ02oMgQF9+IlhLW83JoFLz0vRkgJL759P0i8syjM4F4FJuRdR4QsMnv/ob3Pabp2py
                        6Z98YRAf+tLdGBzJm7iGM5Dx40AqUZPjNgNIKgFp13Mgyea6Bm6CnzeFIPBRLlx9CNW4t6TewwVK
                        YS5ZARw7bI3GyiYDeCIDb7WNKiEDUjEZ5JBCVw/E0eMgWq6z+cYtD2LXwDA+9YGLqnbJf/vgLlz3
                        g4eQQ2gAYOiWVlBHx2m9QSfHrfwCsxGyr8vQEjzmKPmYG2jusFMPMHsWgQdCEAYPojwymF64V0oG
                        sFfVkgwy/REIjO4eCOMjoPE8Z/O2F7BrYATf2rRhxs7mL37vQfzuod2FskZTbecxbwBBWB8II0MQ
                        Bg/VuxtF4dXcM9dlhY8Kyl8XT1bxtmU9FtYWhdF/AiAIaAQy4FV1bHsjHaO9C0ZHZ8Fd2r3/OD64
                        aSt2DRyv6AGKJTR88Eu/we8e2lWwjqTiIGPHAc4q2vdcgHjkAIRjh+vnL3Bd8jrpIukrsQj5hNH8
                        KBp26n5zyxjhNdjTweUAjKWrIAweAFHVaWZKa0wy4GWRQeHvWLgFuiRDOj6UMyTcvf84PvSFu/Cd
                        69+Bl5+xvOg17F60KOf787sH8bGv/gEv7D2G/GeDTE2AJGNFBgvzAMyEeGg/SCKGst6bOqGc17XB
                        Xm0fVQQtPuJ3W5obXJJgLOoHi7SgvJF4uWQAl/3Whwzyt+dKAPqCvgJn81QshX/50A/wq9/9zdO1
                        fH73IN5+7c14Yc+xvIvMQMZHbEE4P0HUFMQDe0GSMRR9leq5lAHfdzy/QCt5Yrw9IPU3FbkulMLs
                        XQyeLgxXEzIoFNb1IgO3jG0uy9B7+sDlwjmZP/GlX+GjX7gduqpCV1VwljX3pNtu/7/HcNl7/gdT
                        8byJ7k0DdHQYZD7PYZCMQzy4D0RNof6S3zsjVBJB6JPF3EPJTOUZ3eAGfzrMrl6IqRRgaPOKDDKf
                        hEDvWwxx5DhoXlG5O//wFA4cOo4v//trsXjpIkiK5XAeP34c3/jxX3Db759FgWDRddCxYVg3vvm1
                        yYrAuRVJhOa6BL5/wEcaFKhVfkEDaAPTLYIAcXLCIcO8kgFqTAaoLRk4tje6umF2dBXcvSd3HMEH
                        Pn8XDh+bAABMxlL4xNf/gNvufrZgW5KMg44MzmvnMSQZhDHUf/Q/M7tRpbLA1xDmBuhMspPngqpI
                        dB3ixBiIYZZBBtNrFMBMyIDMChmktzdb22C6ZDbv3j+Cf3rf93Hvg8/jHVffhAefGCi8frHJbE2i
                        +QhCACWQnZuj3nK+Qi4oV/DPlfffRy6mLW5XabJKU+Sx230khgFxfBRGtD1rV5/TZICC/bNwGExa
                        BHH4GIiRnd94Kq7i/Z++xbFt+toxO5KoubJuqwpCADmQR6RNZCsqgSZ4e33UABlCmEmW4px4eDiH
                        ODYKszUKFgrVmAzgsl/MIhkU9o/DGunqC5dAGjwMomklrhUDGRsBHMQx70ApoARzyIADrnMNNBzy
                        +ljJOzwn3nkfBbAylWuRpdikT4wwOQ6iazCi7VZDTciA1JAMUGJ7FCeD9HpBsJzNo8dBY5OFF8jQ
                        7Uql89hfIIiWmahAGyhtn29G+A7n+QUx/25W7+Y272NCkwmInMGIdiCT3emZDFBnMvD+uwIycJCC
                        0d0DQZIgjDkqlqaSILHJeU0GXFYAUXZfSZC9hk2IioR/877mPlxQdvnr+eJUoqkUpJFhkMxkO4A3
                        Mijfd9BQZOD4NNu7YCywnM0kMWUVqJuvZGAn9UGU6t2TmoC7fC9Ypnnx56IcmG8os3RFGWgip3Ix
                        EF2HNHQMevcCcElpEDLArJBBejvW0gZ+7PC8zjwGIeCBIEAFT9s2PnL7WCDb/UJ38xZF8xC8YK5p
                        Bx1nnQoxFMhtZAzSsUHQdE2aPBv97JOBdZzakoG1KUwT8rNPgI7OzixrDQlKwQPhgpBcUZHQd/Li
                        eveueigx6p8PFgEfFjyVv05vEwoG0NYSQUDJtaEOH5ks8avmQbh/Ida8/6146j+/g6n9R3Iv1OgI
                        TF2H2d5ZQzJAwXaFn7NBBgQkEbcmc1Fz51GYVxAly0yUN+qXFBEve+MrkUrpOPrC4bwfNYOGkIuO
                        thasWrowp03VdIxPxTEZLx1W3HxvuY9SyBn2lBoNRMIh9HR1FJBBUTRAIvK0iwt62sP46g/+HZdu
                        eGXBOmFqEuLocYCxGpHB9MJ9xmSQRonf0bERyM8/Nb/JQJLBlWABGZy8tAP/+4V/xFnLO9x/R5pg
                        8QBFltDTGUVPZxSAt1fIJ4fmhycNgVKKzmhrvftac5zRJuMLp7QBAM7/6ruxdEk3vv3NO3OvRWwK
                        kqZB611YML9CU5ABcUgFl98Jg4chHthT71tRPxBiEYFU6Dy++CVL8P/e9yq0hmSc3Qssjk3hidwf
                        oxk1hFJoDYcwNhWHquXmnPjCf27C0xSasiSB0nLn0mmGRya3j0tCuU7DV7zj7/CcEMSfv7cVeiI7
                        WiaaCuXQfmh9i60wRM9kAO9kgBqSAcnfv/Up7t0J4XheOev5BEKAYAigha/F2petwJvf/FLISpYo
                        FgddnMzNwAdl9jESDCClFU9CbIY33Yc31GwKTdIET4lbH5Mmx5+GU3j4eAo64+g590xcvKQPf/zc
                        dxGPOco6Mwb56CEYnQtgtrTCGxkUMy+5kEFGaNu/rSAKqSQZOEmBmZCff3p+RxJRAQhFCkxEAHDO
                        JevQf+oS3DuYxLahFNa0yfi73mCRHTUDI1SGJnilfcwQnspfaxVNjt58j8/OKQOffm4CjDFIBBDt
                        d7t9+UL8962fwXUf+W/sfOFg9geMQRweBEzDcjZXmwzy6ymVEYXkiQwILOfxvhfnNxmIEhAIFZBB
                        S0jGzz/9Otw6yWHaj3PS5Hh0VMVDIxq6J/LmfSBwJZTGQ3l91AzTY45SM5y7j1LwVP7aMExMxcss
                        YlZvh3EFTuWdMR1J0/3R71nYif/9ycfx6ovOKFgnjh63iIHZv60FGTgFTZXIgE5NQH5hnmsGsgIe
                        DBcI8lWL2/HbL12GNcs6iv70uclKBkrNBVXTMZH37nMQ18VH88O1/LVbhuLw2CTGp+Jl7Lre0n4G
                        oUZF0NIawre+8yGsu/RVBeuEyQnIh/fnkELVyWAah3A5ZCAcH4L0wtNARdrf3AAPhKyw0jysWN2L
                        G//9NVjcHSl/p+lSJ428eERC1bB/aHRawc95dvHR3Cj0IRS5qYwxHB+bwMRUDIKYa2kaHp/EfMJ5
                        774UPcv78Psbb89pJ2oK8oE90BcuBQsEUBMyKOIQLocMxH0vznvnMQ+3ZOcwcGDN6Utw4aUvQSTk
                        Mbx6DmAinsT+oZGcNsZ4gSPZF/hzH2KpQbLbKs0wAcPMbXOLQGiGh2cGfTzlwrPQt2IhbvnU/0CN
                        OyKQdB3Sof3QexeBtbSWSQbwRgYFpOCRDJgBadcO0KmJel/5+oEK4KGWgsxjAHjdP56Bk09fCr3i
                        54Jk81OaCLphIpHKLXc+nfBvhtfbR/mY0RSapbettymouuYiNyxYsRDvvvFq9Czvy2knzIR85CCE
                        sRGURwbEOxk4opC8kAHRUpBfeHp+k4EgupKBokh4++Xn4NS1S+rdw7rAafJxM/14eXOq80b5qDc8
                        TaFZG3E6N9C2oB1XfPm96D91RcE6aXgQ0uBh1IwM0iU0piODZBzyc0+CJMrxAc0xSDJ4uDCstKe3
                        DZdvPAdL+7sq3HEe6u0f8LS4d91rNrIvC+YuPJeumG67wo144y9VepQD4SDe+eX34iUXnlmwTpgY
                        hzywG0iX0QZQVTKYZnth5Bjk5/42v53HwbAVSZSH/v4ubNz4KvT0ttW7i3VHJYLfJ4a5B1qu4C/2
                        UPgA3vhvb8Kbrn1jQTtVU5AP7APRUqgdGaBgO/HgXoj7Xqz3ZakfCLFMRFKhg/gl65biXe88B4FA
                        Fec3IGiA0b+XKKNcFaFqg0AfTQ8R8O4v8DE9zrroTHT1tuOmL/wUKWe5i1QK8oG90Bf3g4UiNSAD
                        x+9ME9K+F0HHRzBvIYjgoYhrJNGlrzsNZ79iJWoz1U/zOZWdqOQ992XD3AGtRFX0hHqbgzwttbmo
                        K09bgQ9++d1YlOdshmlC2r8XwuRYzciAqCrknU/PbzIQRfBIq118MItAQMLGt5+NV71yZe2OTZpg
                        cUElgSS+pjD3UMEUmm4Zis09KqoFFq3ow4e/8m6ccFp/wTrxyEFIRw9ZX6pJBokE5B3z3HksK+Dh
                        1gLncUc0hA+++1ycuqavwh17Qb0l/QwYIQ++D2F+omgJU6/p6UUzFOs++p89p3IxBMMBXPPld+Hs
                        C88oWCeMj0Lev8dyNleBDITjQ5B3zvPM42DYMhPlYVFfGz5+9auxqG8WnMf1lvUV8EFFPoS8Bj9T
                        eW7A9iFMP2rwb3bluOLf3oClK/tw6/d/l9NO4zHIA3ugL1oKHgyhUjIQjxyAcORAvU+zfkhnHrs4
                        j88+cxne8aYzwQCYs/IMN7e2zKdt8DWBuQwxnwy8CH4+zfdSrfMVF132CnT3RPHDG7Yi6XA201QS
                        8sBuaMtXgweDKIsMmAHxwD4II/O4DAWllr9ALIwWetOla3HBOatgVrDbitEMfFBES8h/Zf1gk/kH
                        sRQBeL3ZfCY/ridmuY8vecXJWNDTjhu/eAuOD01k2olpQtnzAvTFywrKaJciA3nnM/PbXyCI4C3R
                        An9BMCDhrf+4Fi8/qz9Ta3D20JyMUEmpimZ4xX2Uh4wPodJYZP+hKA9LV/Tii9+6CkuX9xSskw7t
                        h3j08LRkQJJxKE8/Pr/JQA64kkEoKOFj/3oeXnnWstnvU719AzPwIeR/dy4M07/3viyYG6Clbq7X
                        CAN38CZZZh+hcABf+tZV2HDZKwrWiSNDkPbvAZgdJZ9HBnRiBPLOZ+a38zgUsXwGeTi5vwvf+/w/
                        YunCaB17V29pX1mUUSnhX2xbf1A490DLEfxlPQD1lvONyQU5uP5LV+AD7//7gnZhchzy3hdBdLuK
                        rE0GwtARSLufn79kQIgVUqoUTl/5hgtOws++8HqEg/UsW22b+hp9ycNM3v0Ge6V8zBAlTUZenUq8
                        5JpGXuqPD77/H/D5z78DkUjuRC00lYCy6zkQNQmAQBx4EeLBvfXubv1ACFhL1HVCm6v+6Uz814cu
                        QmtYqXcvmxbVGBg2xhvlYyYQy7mJ5WxLmuHpqEMfFVFAR1hBayA7kn3TG87BaWuW4fJ33oAp59wK
                        pgl5z06wcAvoyFC9r1bdwANBqyZR3ui2JSTjM+8+H//06pMzbSs7WxGaSmI0qWFCnX1NqhnnQyg4
                        h0q2aYb33ce0EN0ay30gmjfsdHb6GA3K6A4F0BlWoIiC6zYnnbQY99z9BVx+5Q14cdeRTDsxTQiT
                        E2Bt7SATY/W+YLMOFu0EkSTkFx6KhGT87+dfj9NX5Trnw7KIVZ2Wf8FgHEPxFI7GVBxPajBnJxGh
                        6VBKX/bzEuYXptUQvISU+klrhVgQVtAbUdAdDkCkpUeNmmHi4PAYNF3H5774z/jh9+7B/fc/k7MN
                        TSbB2jpAYpPzxofAunpAOLHnqc5ew/5FUXzs3efAEBmePjSEJR1taA8VmotESrCwJYiFLZbPYTCu
                        4nBMxcEpFUatyKEZNIQifoTpGt2vWBOcrw/PyGgIXnMJPL9G85Ak+iIKFoZlLGkNFt0moRkYT6QQ
                        S6lY3dsJwJrCMKXpoAQIhwO4+tpL0dMTxS23PJjzW5pMggXDIMn4nCcFtmAhCCtMKXv5aYvwwXe8
                        DMGABA5ANUwkND1DCLuGJ0EoQTQgoyvPp9AbVtAbVnBmD3AopuJgTMXAlIbkfNccXFSEwitCplk/
                        L1/5OQdLQ6hQ8PMZrJ0rWBJRsLRFweKIAslFEzAYx3hSw1gihfGECsYYKOHFi0jZeNvbzkVPTxtu
                        +MZvctqppoHLAXAwkGSi3qdffQiipRmYZsHg89L1q/GufzoDDCiacJY0DIwmNRwYj8MEQVdIQXdE
                        QW+eprY4Yt2zV/QCB2Iq9k1q2DGRwszRfCPmXD6YXnuYH2/2/IRYSamK/Lb59oC0SAJOjgawuk1B
                        RCr0CaRt18NxFaPxFCgBBAACwbRE4MRFF52OlSt68PFP/gzxhJppJ4wBVABrawedQ34FHoqAR1ot
                        MsgTTNe842V49cuXlz2HwVBcxdG4iu2YREQWsbg1iIVhBSHHfVsaUbA0ouAVvRHsndTw+EiyshMo
                        EtbZHCAVj/rn2/s/l5HjVK7qA9EMjoUK+/j2VR2u7QcmUzhmE0GaAITydl2AFSt68O0br8Tnr/sl
                        9u4bzrQTZkJQGcxo55yY+4C1dYAEAhbZOYRqOCjh+mtejf5F7TMWPBOqgdHhGJ4ciqFFFrG6PYTF
                        LQpkW3OQKcFJUQUnRRXos1/zoq7wQrTz64rMT2Scyl5udndrGD2tYch5kTLGsQkPv25ORGWKl7QH
                        sDDkPtXisYSOgckkjsZUgHMI4BCqPEjsWdCGr37pbfja5t/iL4/uylknpFJg7d0gY8MV7r3+MLt6
                        QEAL7EArFkVx7eVnY/niaNVrEo2pBv4yOAnjKMHiFgVLIjJWt2VzHJzmv9cvjuC+YwkMqx460YQa
                        wqL2CM5e3pvTZjKOoVgSh8ZiMFghXfjkMDchetUKFkZb0BeNTLe/afbSPFgYFHBedwAvaS+MXpnS
                        TeyaULF3IoWUYUC0NQGphrIgEg5g06fegO/+4D7c8esnctbRVBKsrRMkNtF0zmazZ5GlFeThtBMW
                        4LNXvQqhoFzzJ2n/lIq9kyoeOhbDCa1BnBRV0B3IKs/r2hWsa1ewN2bgj8MpbJ/Q6n3Zag6BEvS1
                        hqCIAl44Nr1ZshkMAj6mh6fENEppmWSApuWD1RERl/YFsTIiFt3mp7tHIQIQibXMJv71PRdi1Yoe
                        /Nc3fpvTTjUVPNwCbmhNUfSOiyJ4V5/tPM69iBefvRwfufzsTF2d2YJqcjw1msTjI0m8Y2U0hxQA
                        YEVExIpIBKMaw/8dTeKugy47aQoNwXsfO0IK2gIyJlIWCXJPoag+mhU5Ps5i6ekhWSx/z02IixYE
                        cM0JLTlkoJocfx1J4WiycUber7nwVHzturcinBd7TwwDhEpgbe317mJJ8HALeFcvYBaGlX70irPx
                        71ecXe8uIuUIRd02lMS4ltViOmSKy5eF8d7l4Xp3c1bQGpDBuWXRa7ziLz6qiaIawoyjiJpBh8zr
                        Y8hh/B/TGB4+nsKz4ykYjOPy5a317m0O1p62FF//0lvw1W/8DnsGjmfaCTNBOQHr6AYdbTy/AmuN
                        AsGITQa5zuP/fP/5WLu6p+xIolrjgWMJ3DuYwNr2AM7pCmBh0PKhtUouMWPNoCGU2UWvdYua4I33
                        MQ3sKTTzkNeg6bM651RdMaox/H4wiSfHVIgEUAifdbOQV6xavgBfv+6t+OyXtuKp5w7lrKOqCtbV
                        C3p8sN7dzIB1LgARRHDOc4TSysXt+NjGV2DFksbWbJ4YVfHIiIr+iIS/6w3OfIdNgphmzOsw8/kE
                        0YtNMGUwDE4m0NsaKmPXzffYPDam4bnnJqAQXlMHcTURCSu44bq34Cs33o3fP7AjZx1NJcE7F4BM
                        jAJGfU1erG8JiFk49l+5pB03fOQihENyw2kGxbA7puOGXQaUkbzEwKbOQ3DHRErD8XjxhL3me8t9
                        lELefAi5E2nwzALsH5nE4fEYTK/xf/WubF1B9eujqebVhD7x4b/Dxz/02oJ2oqpgrR3g4TKDAqoE
                        LkpgfcvsZLNcvPaVK/D9z/49IqF6zmFQOQ4m3J6Xek9+U9kEOW44NpXEc4Pjme9++eu5D7GcDMWD
                        YzEcHItlSjentxkYnfK4h0ZDM/TRO/7u1aegb0ErPvnlX+dkNlNNAxcVsBYRdGp81vrDwi3gbR0g
                        plEghz74lrPwTxedPMfuAJqxcgWOTSXx9NHRzHcOIKYarvkHzm1KfffRnKBe5ktF3rqJlIaJlIZJ
                        e0loer3Pw4eNdacuwY1ffBN6u3Od4ISZoLCczbMBFmkBj0QLNINwUMIXP3A+3njRyRXuubHBczTr
                        xl2cSBkmxpJaZhlPahkycJMNBTLDDzuaMygIk/A6M9K04Wf1NgdVaDaaC1i1vBs/uuEdWNVfKPyp
                        YYAtWFjT45tdPUC4FSTPQdXbGcaNH3sNzj1jSb0vUe1Qb2vQDCxG0wp+5Al/bn2f46/TvAItJR89
                        kQMvFmFab0k/T9nARiSs4Edffzv+7oI1BetoKgW+YCG4KFWw59Iw+5aCCIX7XbWkHT/a9A9YtaSj
                        gr02E+ot7ctnhGlH/Tz7npcmjCa0l/nIgXvYaREUi0ia26K1ufHJD70GJyzvxjdv+lNOO1FVsPYu
                        YGocJFVhdU8HuCiB9S52rVT6unNW4j/edY61Xb0vSK3RDDIxv4954yNv/oHp50fw0Xxwr2XkIRR1
                        OpAmSEwj8+QxfvM/nIG+Ba247pv3IJ7M1uGhmmZlDQsiSHyq4v3zQAisawGIUTiHwTsvW4srL1s3
                        T650eVE8jQInHxTeJ39+hPkEyh3qIOPe0tPnl/FlbuDcl63ENz//T+jtbslpJyYDkRTL7l8BWKQV
                        rL3LIgMHIkEZn3z3Obhyw7p6n/rsod6WoBn4ELLO5vyw81wTkZtfwcfcAS1X8Ht+IJxM07BLvS//
                        7OKE5d246f+9Dav6uwrWUZPB7F1c1v7M7l4rkojnhidGgjK++R9/h0tetarep1wH1FvaV+JDIBW9
                        526/8dHcoIB3wV/K6eyjORAJK/jmf74Br1t/UsE6qqow+5Z4cjabvYtBqFhABquWduAXX38jTlg6
                        153HRZDOVm7kpYgZyGtwiaum4AuCOQFPeQjzL0ZnbiMSVvCpD1yEK9/0soJ1VFXBu3qKkgIXJbCF
                        y0BdMtZf96pV+PZ/vK5pM4/nOzwNDF02ckYf+WhuTDuFZj64x7amqHY6zx/hK9/8MvQuaMWNWx7E
                        VDKbXEg0Dby9C0jGQWKTmXYuSuDdfSCGjvxR5ptfewqufvvLre3qfWL1RBPWMipq7vEQXDKv7/Uc
                        RMkJcjxFE/hDg6bGJetPwgn9Xfjgf25FLJGNQCImAw+FwQIhCMcHwSOt4KEWEKOwDMWn3nMeLjn3
                        hHqfio+ZYBrhX+lg0UdzwdWHUNJG6FlVrHfS2fxOTPMCUZIgKQrWnLgId37/3TghL7OZmAyUA2zh
                        UosM8p3HIRk//eqbseGiUyErCmRFKefwcxD1dhZXnphWTiRRKdOSj+aGWKAqutzV6UYLRTWHRkcz
                        9LFMCKIAQRQhCtYnAMiyZdMnlEKU3H0D0S7glu9ehU9c90vc+9DzOeuIpgEgObLkpJU9+O8vvhWL
                        eqNF+2KaJky77Lau6+CMwzANGIYJk3Fo+hysgdUMFiOXPhZ7Fby863PwNZq3EEtlKLq3uYet+Zg9
                        UEohSxJkSYQgCpAlCYIoQhCEGe23NRLAd65/O6678Te4+fZHim530Tkn4cuf2IDWSKDk/gRByPSp
                        mPbAGIOuG9ANA4ZpIpnSoJkG9KadlKk53wUv774v+Oc+Mj6ESjIUi7VNt6Zx0Ph9lCUJiixBkSTI
                        skUClNKK92foOrhdyZJxDtNllP7hf3kllvW24PPfuqdg3Vv/fi3+/crzIHIdiSk95yqmCSD93YsJ
                        iVIKRZGhKJYWE3UUaU2qGjTDgKrpSGoGYilt2v3VFc2ZqFxgFvLkL/BgSfDRfBD5jAV/EfhPR9kQ
                        KEVYkRAKKAjIEoJKeeGbmmrNgaBpGojju5ME0phObr32nJVYsbgNH/rC/2HKnlvhU+9bj0vOWw01
                        lYKays6iVWokyQFQQiHYpipRkkBt0xWlFFIJggsqsnUNHHPZpzQdMVVDXNUxldKQNBpHk+Cermwj
                        oLAOUcngEg/RRj7mBsRK1EJvv/EfG69QJBGrFy2AJE5v8kmbWFRVBWcMuq7nCHxi/+d85SsVUScs
                        68Iv/+c9+Or/3Isr3vRKrOiurDoqYwymTU6qqmYqY2YEEQcURQEVBUiiAEVRIAkCRJfrEZAlBGQJ
                        XXYFDpNx6GYD5cg2Ax8UQSWC33/La4dFt9+6DsC6w296y5ZZOFY/gA1lhZ0WbWtWT1Md+tgeCqAt
                        KKE9lLW/i4L7CNkwTKi6Dl3XkUpplmOWs5xqM0BtLRWLetrwneveBgAYPny4Ztclpapg9iRvDFNW
                        bS0AwYACRRIhSzICsoiAnEtKAiUQaJY4Tl4QxUhCxVhSw2BchWbO9k1uQkbgVg0zD5uV/O5j5lh2
                        2+3rOfgGABsoIcs4+B8BbKnRsdYBfCMH1lNC1nLw4uWvvUQO8VLbNsXjUvs+BkQBCyIBRAMyOsOl
                        beopTUdS1ZBMqdbI3zQLgwabUN7MBImUinhKBeMJcFiRUoosIqwoiARkRAK5ZjVJoOhtCaK3JYiT
                        AUypBgbjKo7GUxhLGTXuLWnKG1RJJJEfSFI9rLz1Fxs4wQYAGyjQltaewXnVn6eVt/5iveNYyzL3
                        0T6W6CVD0a2pGcR9vRCUBPSFFSxqDaJFFotul9R0xFUNU4kUEikNlADUftUoynsWJEkCobSqJiMA
                        oI7IJcljnkGBg5IXtmUeegCplOppvwBgMoZYSsNkUgMHYAKIKApagjJaAjLa8giiRRHRoog4oSOM
                        hGHiSEzFvokUjtecHJoLxQZ3XgS/LwvKw0m3/irKgQ0cfAMHLqMg4Jxb1zHz0nMQkKoUfDjx1l9t
                        SB+PgrRZ+WNZsiHg1vvI88JOrW6U/u4Z8+wpCUsClkQUrGoPIljEF2AyjrFECuOJlBUxwxgIAQTM
                        3NDQGm2reWJYtKtr5jtxwYGDR2b0+0l7jm8TlumjPRxAW0BGd1hBwHEvQqKAVdEQVkVDiOsmDsZU
                        7JpQMVxNcmgGDSGvi9kEs/KFf1NUqGkAnPrzrf02AawnIJfBFsgEtnB2jNQJSQ+YKru4p/58a9Q+
                        lk04AM/bJ3GQECdWL4CSYafucCMM5mnLuQdZIFjdFsSqtgCiirsmENMMTCQ1DE0lkdJ1UACUcFBY
                        RFAKP/vJNtzyk21V7fPChZ2441efQUtLqKbX5tvf/jW+/Z1fV3Wfa07rx+e+8s5ptzseT2EolsIL
                        xwkUUUB3WMGiliBaHfcoLAk4qT2Ek9pDiOkmXpxQsWM8hXGtgRzUswjuEnlUsI0fbVQW1t5yZz+s
                        kflGQrAWtvhP/885wIlFBmli4BmtIEsYXrDuljujHNjIgfWE4LL8fSJvn4UkZGnsRZ3KxeyIEiVo
                        VaScbYaV6s/N28hY3qLgpDYFy1rcR+STqoEjU0mMxFVohgFqawFCAwwejxwZwVUf/SE+dP17PG3/
                        0mgg0+9HxlKefgMAhxrEJJPUTewbT2DPeAKUEPREAugLK1gYyd67iCTgJV0hvKQrhMMJHc+NqaCV
                        3KumcfLk9jEkCegKZk1tHMB4Sodue5r9aKPKQEE2cvDPAQTENtNwkjaV2iN1Tux2IHtfsuYir1oC
                        AVkH8Bvc9+kkoWy7GwmJxQS/2/dTulqwPFo4shQORVx20gSPSBl9FB0S4rWLWwvWJ3QTB6ZSODyZ
                        hGqYGQKYWe5wbfDkg8/g5797Av1nnzLttme0KRBsIVcWISQbgxCc0BnH/skU9k6kQAlBf1sQy9sC
                        6HBoDotCEhaFJE9RN3MFS1sDOHdxtKD9SEzFY4OTGWJIw/cnekPaQp8zIucAiC3w89qJLcTzTTte
                        QOEM5ba1DlcScrZne5kmoRxCKHVji5HBXEd/WMIZHQr6goUmIY1xHJpSsWs8gUnVgEQAAbwhNIHp
                        sG3zrXjbD/8DcjhY767UBRrjeGEsgWdHkwhKAla1BXBCm4IWyaJwp4bwzhWt+Nuoir+OesiUbgoN
                        wRsWRhScv6Qd9+wfBeDXMSoXlNsCOt8sZLfDxVzkbtqZHoST9B8oRkKu7cj1WZTOQ7BXhiShbDIg
                        zaAhlMBZHQrO7Q6gL1A4xj+S0LF7PIW9kymIhENsUE2gFLR4Cr//4s249Pqr6t2VuiOmm3hiOI5H
                        h+PoDck4sS2ANdGsSak/LKE/LOGCHobHRlXcP5yC3ngKUE0QVUQsjCg4FJs+Eqy53/jqIz00cDPh
                        FGt3M+3M9FgEyJBQUZ+F3W7lIUwTZhr0kEE7FyARgr/vC+KVHTLa5dxkMdXk2DGewjOjKSQMAyIA
                        sckHg0ef3Ytn7nwQp112br270jA4HNcxENNx32AMZ3SEcFq7gjbJehbaZYrX9AZxbncAj4xq+PHg
                        aN6vmzMPYTpEFbGAEPxoo+lB3cxChJdt2qnkWMR2WGfDu4uTkLNdrCRDca7iogUK/r43t4LnhM7w
                        p6EE9k2pME0OiTQ/ETjxxC33oP8Vp6JlQXu9u9JQUE2OB4cS2HYsgZWtMs7uCmB52AqeCAoEF3Qr
                        CC6P4IGCX86hh8OGs9aRX9TOOwgnhWahSkw7FR4LjmMV91nktk87hSYHMK5aEQdSOaEXzTBkyOuj
                        8/z2xgzcP5TE4bgGkQAy4RDL3X8TQIun8IcvbsE/3XhtvbvSsHhhUsNzExoWBES8oiuAl3aUyPdo
                        Bj4os4/HEnpmMqx8NMFbXjcQ2CNvknUR55pwXCJ+XEw7XkBRwiw0nc/C0V4yDyEdm6wx4IWROE7r
                        jmCu45FRDQ8NJzGUMiESQGmGF3yGGNl3FE/87B6c+baL692VhsaRpImfH4jjt4NJnNcdBHWtk9QM
                        D4z3Pu6dSOFYQvNDTysATUcLcVsIF5hwnKYdoLh/YXqQ/N9Ou093chK9ZijuGk8gbpg4vTuCkCef
                        QvM9HvcOpfDc/jgUYpmG5hOeuOUe9J99CjpXLKx3VxoeoxrD7YcSmDgcz13RpPMhuEG3o7CePh4v
                        WOdrCt5QEHZazFw0jWnH67Fyfmvvs6jPogg5ieVkKB6eUnF4Si3YZt+hcZcf1ft2lI/ErFfGbCxs
                        23wrLr3+qnkbilouVBcHXDMWfXvmeBw/3Tnkus5b4bvmO+fZAC1pLvJu2vF+LCAj3DGNz6JIO83W
                        MbHqwPC8hXFnrZNy5DxvksVHGiP7juLxn90z8x35aDq4vRms4DuxR5XWwri1OOWFjyzSPgTKiVWy
                        BsT+Z61Lt6dH9zntPNvu/VjT7NPRTmH3ye5ful1M38RKbYS+WJ1bePauh9B/9ilYeNrKenelCdGc
                        Yaf577DrLIq88Dc+SoN4MQt5MO14Ac3bZ77PorDd6mG+f4G6CXRvo4XctgLUe+DvKwgVY9vm26DF
                        k/Xuho9ZQv6ovxIrgf86FaLYiDw7cs+2E06sxdGe1jC8gOQdi0yzz3Q7dbaD5JqM3AR/sbbpUW9J
                        77NBpYgNjeHh799V7240Jwhp/MUFxQT/dIPFaQeG8xiEOwQ+HCacIqadjAkHucLd87FK7pO4k1Me
                        YXiuZVRqm6adQtNHUbx43xPoP/tUoP+V9e5Kk6EZTEaFgSTenMfTb1NPnHDrL9czZEM1md1DBj5w
                        4M1vHpjt/qQnvknPWJWZiAbFTTtwNe14PFb6t8R2KOfs045CKmYustvLK39dxI7IPe+h0dAMfawf
                        tm2+FVN/vw5KW7jeXWkeNB8fAMj3IZReX3SbWXidTvv51igH1nPwdRxYx4F+TvhaW+zaQtiOmCG2
                        XRwEy267HRx8PyfYzsG3c2Dr4Te9ZXst+5oNO+V2n9LZxOn20hE/npMQco6FHBKyjurBZ8HzEtOc
                        8JKeXq5m4aP5oMVT+OyntuA73/pAvbvSRGgGRsiFU0PwRAaz/MK/5Ja71nFgIwdfT2FNBu8suZBN
                        rHK0ZYgBdklpDg6yjHMs48BlnOBzi2+/dYJbE9hvPvymtwxUu9/pUXvWSV/csZsJRyUOpzLSf5dz
                        LCCfhLgLCXGeJQxnuzhd9EDF974ZYtCaoIv1xrYHnsL//u+9uPzyi+rdlcZH83FBBq5mIw/vR61e
                        oZf/7P/6OXCNPQ/wstyIGWS0gCwJuLWliaFIG0gbJ7iag1+96PZbbwawqZrEYMnhEuYiz6Yd78dy
                        7jNzh4qRkIMw0u0Zp3K+c2i6aIJ8h7OPuYtvf+fXOHx4pN7daAKQJllyweGeg+S23cyDTUrjlT/9
                        zfpX/PQ3Wykn+whwNQFZ5oznz42vL9HG0232P7c25LRdAWDfottv3VS9pyHtvIXDeeuI+Mm0u0T8
                        2A5f6vFY1GWf1GWfFC45Ec5ciXIEf6lEFR9zF1NTSXzyUzfVuxvNgXrL+vL5oEAAeHv33bepFOf9
                        5Hfrzv3p77ZRkAcoyGXZBC2SI9Q8tyE3IYw623jxNgJ8btHtt25fdPut/TN9FKyIH4fAd4k6Sgth
                        6kIY6XDU8h67UiSEAhLKD0f1OIVm6UQV9yijZtAbmqGPjYHHHnsRzC+A5wHNNzgq5UOodbTRq39y
                        d5QDmyjI1bYZpyChivMibV58Cd79C862tRx8+6Lbb10/E8czcTML2Q7fckw7lRwrZ58u7W7mIou0
                        kDvid0tPr145Cx/NjCduuQcje4/UuxuNjXqP/ivREFB81D+dmciSD9mlHFz849+vo5xsoyBXO80b
                        lOeP7ou0oUQbn64trR0UaeOkjYJsW3z7resqfRQyJhy4mIXKMO2UdSy3ffJpzEUOrYWWK/g9jw7y
                        d9aQS6W3ev5i2+Zb692FBke9pX35rOCFDLJ1i7IL42RGA0MCsoGArHUzYzjt6BW1oUSbd/9CGwHZ
                        tvj229ZV/iSkCQZZgZ9uhzfTTlnHSu+z4FglfBZOIqk0QzH/oXHvYOMvPsrDyL6jfhZzMdQ7A9nz
                        ktvtgvfag+AvJh/KAeVkMwUmsqN4uIz4keMfyC/KVlFbgWZR0r/QRjm2LLn9tmi5j0N25O1wYOeM
                        yIuN1J1+h8qPVZ7PAhniKvlweFUdC8GbZPFRLp696yEceWZPvbvho4ooZ9RfzsCwFO6+/OJxixQ8
                        mIdKkoVLG6+wDa4EspZysqnca1q2uaiIaaecYxWYhcokIVrsxk4XTTCtWK23nJ8DXEDLmbJ0llGP
                        Ani0CSqJckIafinoM9xfCTdZMJ1pqVwQkC1ZYZ8VTrmagUPY5dTsKd5GUKKNT9cGt7ar+2+7vb/M
                        c5veXOQU0EVMO96PVYHPIp+EyiKDIqZ4H9VBKCCjq60FS3q6sGJxL6KRxp2yNDY0NutzJwQVCact
                        68PKnk70RVsQDQUgUK+R2j5KwctAsNC0VOhzLBe/vfyiAQJyc/5o1s3Mku83oLx4Gy3VBi9tJEfI
                        2m2byjo5xqc3FzkIo5hpx/uxyiEhd5+F6Doy8Hhjed6n+1ofxRAJyGgJKogoMsIBud7dKRvP3vUQ
                        Fp62Ev1nnzKrx40EZEQc1yuhGZhMaRhPahhLajDZTCLiZ4gm0GLykS8DvMgDPs33ckBBNnHwKzJh
                        pW7hpyVDUp1E5ZyofiZt6eM4Q1L5FStu+8WmvW9+44Cn68oYwAkIJSAkex4gdngpPIajejmWaQKc
                        glCSfQaL7bPEsWilGYrTqor1Ngc1oNkoLEvobQ3jpN5OnNnfh1W9nehpi7iSAWMMumnObgcrwLbN
                        t86a6cg0GXSj8JqEZBG9rSGc1BPFK/oX4KzFXTihqxXtweYj2XohPeJ3G/WXYzaqBL++/MIBysnN
                        rr6EhvMvYIPna2qy7MIYCOcVmXY8HYtZx2H28QjnuftE7j6L+SzE/IfC7UEpd5tSrY2F2vexKxzA
                        grCCaFCGIgpFt9MNEwlVQzKlQtV16JqOqXii3hdoWmjxFLbdcBte8+kran6slG7ghcNDEEUBiiRl
                        NIWQLOVsF5FFRGQRS9pCMBjHYDyFkaSOw1MpmDVXHppBQ8gLOy1i7qn83a+kR2QT4fwKZo9crdLV
                        BIRzFLSBg3EyQQi2M/BtANlOgHHGrTNjVtXQ9QTYwDjWOtqs9bBMJJ7bkB3VM2AjgM1ezombDKDE
                        VkGI9TexR/H2uVnaiF26On0lYBemI8TzFbaOhexx7E9iR5Y5j5W9c7am4qiOmslUrvTmN4l/dlbR
                        E1bQF1GwIByAWMQxrBkmYikNcVVFMqVBN0xQAlBbgWsmy/jAo8/hxfsex+oLz5qV42mGiZRuYjyR
                        ggmAEAGtARmRoIy2gIywnB3niJRgcUsQi1uCWLugFUfjKg5NqTgwpSJVidF7OjQDH+ShmEO5nO/F
                        2rzizitePbDh5vtvpsAV3B7dpk05FJbQoiATnGALB7be9y+v2TbNLrcB2HTOT3+7joNvppycnzYF
                        pSuDUod5qGRb2mRkta31fF1tM04OKRBelmnHq1uZm8zaD6H2cdxIKL3PLAlZ9yxLQqLbgMmTpuBw
                        djRv6YrqYVFEweKIRQRSERKYTGkYi6uIqSpSmg4B1n0TMHtypHN5HwArn6CaePj7d6HvtJVoWdA+
                        S2eShckYRhMpDCdSYByQRAFtARld4QDag3IOKfeFFfSFFby0FzgUU7F/SsO+mIqkUY3ntXmzW0r5
                        Az35C6pw+Vx9CZbg+iMH2fKbyy/aUu4+//z2S7YDWH/OT3+7hYNfUY0yGCfd+qv1L7zlDdumvabM
                        EtKcE5C0oKYWy1ltHv0LXu6fyez980ISsjUH57GKkZA47Uggz8vdIglokXPHr2pAxHxER0DEqe1B
                        LGlxJwGDcRyPpzBhEwHnzLLVEV43DUAOB/HK9/wjfnn15qru1zId3YpLr7+qTmeWRcowkZhK4tCU
                        RRBdYQU9EQUdQRkhh9lusU3i56AFL06ksHdKw+5JrfIDNwsf5PWxVRawOCzlvPuqyTGUMgoFkgfT
                        UqX41RUXDPzTlgf+yAnOt4XUHznHpjuvuHDbTPf957dfsvFVP/3tOg6szdYscimp7a3M9jpYGkhJ
                        cJM5Ruoo0BJKmXaQY9qZHhlCcO4/few8zcGNhACAgOdNoZkn/J3rFIHgooUtWN5S6Kj762AYPyjo
                        4Uxv4Syggj4qAsEp0QBO7wgiIhX6BHTGcSyewnBMxUhChQAOamsBQoMIi84VC3HmP1+MJ26pbtjo
                        0Wf34pk7H8Rpl51b71PMwbG4iqNxFSYHIoqEpS0BLIwoCDvu3+q2AFa3BTClM+yeVPH4SArHtUoc
                        Dg1yk8vAKVEFb+lvK2gfShn47aEYhlIGADdNofrnSkA2gfNNANl0x8YLtlV135xsAuF3wB6D589U
                        VrQNtu0q2xb1crxcH4JDKNN0WJM3046nYzFm99PaF+cchFJHm62V2P4LixjsAFiHf0FMh1lNh2Jk
                        UKKL1byXNYL3Pi4JSzg9GsCaqOK6/khMxWBcxeHJJIQGIwA3nPm2izHwyLNVNx395Qe/xsLTVtb7
                        9IpiQjWwPRXD40MxLIooWBRRsKRFgWy/iC0SxRmdQZzRGcSBuI6nxlQ8PqZ6P0AThp0Ww4KAiEsW
                        R3DT7vEC4V8rB/MvNq7fBmB9Lc7nwXe8but5P/ndBCdom2mYqhekR+2E2oX/nFpCWaYdj8diDocy
                        sTvOHASUJp+8NicJeSp/3SIJZZLB3EBAIFjbJmN9TwhtUqGRZ1Q1sHMsgaMxFSbjkGwiaBa85tMb
                        8csP3wAtnqrqfrdtvhX9Z59a79ObFgdjKvZNaTCPTmFlawBLW2Qsb8kS/tKwhKVhCef2hPC3URUP
                        DqegV8XX0DxYEBBxansATztIsZbRRrUGBdnOOT9/pmW2vSBNCGl/QY5QLsO04/lY6dF/hoTgaOM2
                        CdC8NppDQtP7EIACn4G3HjbLI1KIDpni7E4F53YFEMgb5muMY9+Uih2jSUyoBkTCITYZEaTRsqAd
                        Z/7zxfjLD35d1f2O7DuKqaGxep9eWXhxIoUdEymERRGrowrWRANotQcBUYni1T1BvLoniMdGVfx2
                        MIljapHnuyk0hPL62CoJRZ3OzfaaU2A7hx1x5OZL8Ohf8ALOTOuIGTORLYDLNO14OlY6oilHS+Ae
                        2pAlJCchlAoUarabXilCAsHly8I4u6NQGxpKGdg+ksL+mAqTMYgAxGZ496fBaZedi4FHnsPRZ/dW
                        db/V1jpmC5O6ib8MJfDQUALLWxSc1RnAsnA2z+GlHQpe2qFgV8zAd0bG8US9OzxLSAvF/LZmA+Fk
                        3OLDafwG07Z5uGYmsxI8qDMUFNOYdhxaQrrNy7HsiCZre5ollRwtwUECLloCaLp0xTSRA0MpA6rJ
                        oZRlFG+GxyW3jxctCBSQwVNjKp4ZV3E0oUEEIJHZI4LZKm732k9fgZ+96/qGF+KzXdzuxUkNz09o
                        CMsU6xeEcHKrnNEYT4iIeMviELbm/ML7iK6Z8MKEVpC45ikUtcp444/uX0cojXKgn4P3Z2c7c9j5
                        3dqQHt0DFGR9NcpgeEHWqYyiWgKxtYRczcHhXygnDyFjeoJj1G/vy+HA5oSD8FyS4sSaF0L0kqGY
                        NDkeGIzj7xaVUWyt+fggg5TJ8dyEhvuHkkjoJkQCyLPwnocCMiKKDEWWEFLkWStuJ4eDWH/NW/CH
                        626eleNVinRxu1hKQyylIaHpGE9pYGZtH7ZxjeGXB2OQKMUrugI4tzuAYCNHDFQRjx5P4agdZZTG
                        bJHBhm/+dgOhZD0IXU8EspYQCgjWCJrSaafBzInl57xIG/JNRt6m8fSCTChogVDGNFpCnmnH67Gm
                        i2iief6FHJKy/Au5YaduB7I/nx1PYUI3cWZnEKvmqINZZxy/GUzhz8NJGMzyDSg1fO8bqbhd/9mn
                        oP/lp2Dg0efq2g8vqFdxu6TJ8fvBJH4zmMSZ7Qp69bzjEDSHhuChi/vjOraPqdieF2FVazK49Ct3
                        9IOSawilGwklbZwSkMyImYNzmvmezvYlGSFuCW+WV/KiZJtVBiOvzbL0WGGf7m1ekC5ul5OM5hTA
                        nk07Ho5lshyh7xrRlBPm6ljvaCvtQ3B5SPbH9YKNBvdNuPy4GVSEXNw7pOLFo0koxIoYqjbCsoS2
                        gIyOsIKWaQigHsXt1l/7Zvziw5sRa1CHcLq4nZRXEyoki5kCdwAQ0wwMx1M4FlcxkTe6rRYeGdUw
                        dDCe09YsZVzy+/jHY0lMPTNSchu3tmr6FC75/K1RQulmUHKFZc5ID+nTf9sZv4wDAgUYBxdoJtvX
                        EmpWkhW1+5IueQGQrHz11JYtWwG7QJ6zlIXXuNPiiWllmna8Hitn/459uyXDFWgRJBt26imMrIRp
                        qRleAi/Qa0BiXeEAOoIyusJKwxe3s0xHb8b/ffJ/ZvW4XlFecbsIlrdHZr+4XTNoCHnIlwFeIomq
                        qSn83ad/uoEIZAtnvI0ItrBixBL4NgFwZkfjUJscKAXJC6WklOZlFueZgtzaKiyz7em6ljTjlGHa
                        8XIsZmYJ1OGr4PZ805k2TjP+AjeSKqxl5DE13Zmo4p6x2Aw0UZs+NnNxu4WnrcSp//gqPHvXQ3Xq
                        wfQoVdyuM5RLvLNe3K4pMpUL+5gZ3HkY9VczY/k1H795E6Hkc05TEKhT4FNHJIwt0Di31tkC0PpO
                        MwJ2NvwLXlBQ3C7HjOOmObiYdsqJaCIOUnHVEvLbCklKdN7d6QS/1wcE8Hwe9UUV+9gsxe284JXv
                        +UccfWZP1bOYawVncbs9x3OL23WHczPLa1vcDo11Iz3CKQDz2wu3nV4eeMVF//aDzYTSqzm3hb8t
                        1Au+MwoicIDZTmVmawqUgtOs5sCpu3/BU0nt4mW289q8zwxnmXHgEMYOAezWlhnFk5xQUM/HymQc
                        F897QLGIJmfYqduNdrvZxcigGWR/LeCluN14UsNIItUwxe28Yv01b6l6AbzZQrHidj3hQM59qnpx
                        u6apbpcLDqv2f25b+QPBciyur/7gdzcQgV5txenbQsop1DPfizuVnZqBZRrJIxVCQASaLZ/tKFDn
                        KKntVma7RBsva9KatFaT1QgcvhGHlpBr2skNBfV0rLQPIS/vgdiE6imiyZpCk3gW/AVtvPi6uUoT
                        c6G4nRfUqgBePZAtbjdZ++J2TXSPncg1Aeevc9l+Bg7l9e/7VpRQuiXHF5Cx22Q/LSGZ1hI4iJAV
                        +jlkwCzBD8YBwdYo0qRij4izZqTq+Bc8XVNXMw4p37Tj5VjOiCYgzyxlU5trYlqu/0IsHBlU6ebP
                        MT6Ya8XtvODMt10M7NqPJx5/sd5dqRpqXtyuCRnBqeVXEklU7qvOTbYZnLe5moqcTuR0NBHN9y9w
                        yyREbacypRPgfLvlROXZbXPMT1Z1T0JIP+d8mTNM1fIv5IauZuZT5u5tHs+ziIAu07Tj8VgZjcJB
                        Jm5tRX0VBXkIFd5893FUMzBC6T56KW63dyKFA5PJpixu5wWfv24j3vrGL2BqanbmTZ5NVL24XbNY
                        jFz6OFtTaJ57xdejhJArMqYgF1NRpr5Pjgbh6l/4I+d0028+/oZtXo//xh/ev4lQ8rmM/d6eOjJ7
                        Qh7bPKCYGads047XYzmjl6hLRBPN1RKyORDZNrGY2cez2aiCh6LRMV+K23nBwoWd+MD7L8WXv3Jb
                        vbtSU1StuF1TMEIuvDiUq+VD4Ia5gdOsKShfyOdEDDGSdSLnm4Iov/a3n3/b5rLP1TSj3HY6U0pr
                        azIqacbxYtpJawmezgu5lVORZ6Iq1BIIJ+DO3xA+gyk0p+1hE9BEXhfnY3E7L7j88ovw18dexP33
                        b693V2qOGRe3a8JnYto8hPzvHkPT3cBMc0OWDGwCcDETgRJH6CnPCkzrt3fe/cXLN1dyrsxg60he
                        pFLRMFU4XBp5bZ6uq9OMw7I5E7ltNNe041YMz8uxGMv6BjxrCYVtnspfFxycl/7erHArbrdzUsNj
                        I6m6FLdrJFz/pY0498JPNHwBvGqi/OJ2QHMwgntEYaX+w3Jef26wda4ho5znlHUoHorKwTndVOmZ
                        c9NclxOxxLNhqoQU8SW4tHk8FoidHFasuqi1YSnNwet5sSLZyHkRTU4twaWtZC0jryMBVx9CE5NE
                        vYrbNTJaWkJNUQCvFpjrxe04Zs+HwE1zmTVpjMM05PxMl6RwlqjIC0W9d/OV2ys5z3/8+l3rCSVt
                        1jHyymBQ2+nsLIMxQ19CJg+hZHIYpjXteD5Wsak50/6C9LFtInBr81T+uvgDkr4yxMPWjYjcPs52
                        cbtmQ//Zp2D1hWfixfvmyywAuZi2uF2Tlr920w4q8ylMf+7cMB0C3zLdFCSXZUpSuDuVKz5Pw7wm
                        o5lwZxkMkktOHvwLno5XYMbJC/v0atrxcqxMcTvk7Su/LT8vIrfNU/nr6ZLWmkH0e0Gti9vNBbzy
                        Pf+II8/sbdgCeLMFt+J2FprzwSkWdurW5iYPvGbvMpPllKTICOccTYEgt0RF1r9AGMerP/jddfd/
                        66rt5Zzf3193+wZC6WX5Gkm+pmL5NKYvs+3pmposW6DOKaDLNe14PFZBOYoiU3NmroFLXgRNjw7S
                        CwOxmdBamHMaucw2KGibC6hFcbu5hnQBPB9FQJpgyUOp9zpfHpicgHFkFtNevMoBbpqWoDRNMMP6
                        5IZpf7f/Npj9NwM37PbMdgzMMDeVc0tet+mWddwwt+QeM/cYOd+d29kERmAJS8KJ90xlk4Gz9H7S
                        551uy1vsNubS5ulYzn0ys+A4YPnHNrN/s+y5Uqfgzxf+rg8Iz0SLWZFhfO44lX14Q7oAno9C8DwB
                        2ohLPiRJcBX8bsJ/pgNDbrD9lpDPCuZ8AcwcpJH/ySxiuGz9+761xcv9eO0nf7yJG+aT3GRtWWIp
                        PAbLCG3T8bdNSCYDTGtWBAriuU5bMaGfc05F27IEUu6xmJn7+9xr6nI8x1K8/HUZ0QUdp6x0X9mc
                        2rMPD2i2AnizgqZJTMvtZEt7KMfkU2nYuUcNYYBzsqxYslluHgIFF7ImnLySFFec/55vrieUbCKU
                        bn/gv9+/HQAuvPp7UULpOlCygVC6gVCyLN8UlC6DkS2zzUEYKSyz7Vp11fIveEHBpDXFyl3nOYBz
                        TDvl5CFMW8gODr9Eti2ToAZ49SFMv02wux3J4axdmdjOGB9zF81cAK92aL5nPhhWyvQh5H0vw0LA
                        DHMbEej5bnWHnM5lKw/B6fx1fGZJZBk4vQmcY/1V37ZCR2lePkOekK+8zHZubSUvyCSmTTeTmcO/
                        QGwBnUMiXo6VjmgqOTUnHJnSbm0814fAUKgGutsVC81IHWtytQRao2kMfTQO0gXwfDhQb/9AmT6E
                        1vYggmHZ/b2G+7teYDJ2rJ8O3GRbHb6APDMNc3x32t7TfgSW8SPwjL/Bxffg2C73GPnmp7zveWYs
                        V/+Cbe7yAqdJxto3q8i04+lYzMUs5WxLm6Gc/gW7zelfoOUK/mIPxKL1L83rIQfxSWHO48y3XYy+
                        U1fUuxsNgnpL+vI9ykuWdxV91/k0wr8SH8JTf7lhOzfYfuYqeM2MwHUK/lzns1PI5/oCXP0COQSR
                        K9S5q+O6tE8j7V/wggIHb0Yos0KHbkFb9jeej5UmUDe/hJvvwIWkKAcmPDuPUfyBaD9lJdrztQST
                        WfHGPuY01l/7FsjhQL270Riot7wvteSZH0RJwKIVnWW/6yW0iQEvl4iZ5iYnGRR1Ihu5o3iW5/Bl
                        rqN7B2kYeftxaAu8KJGUOkZ2f17gFMDIF8ouwrhYm+djsVyBz1w0BuZCOMxBIpRxbM1/GLyMBNwe
                        iBM3XlbQUWqavqYwx9GyoN03HWVQb6nvsnC4voMnnLYQgiR4EfReyGH/D1/SPuDlCj3z+De3cNN8
                        yi2iKDuq9xgiauRpGqaZo0GUNhWZ7iYmp9bg1F4c23lBcTOOWbzNxbTj6VguEU0wcwliugijtIaw
                        pVzBX9hmhapF+hdh9RVupMAgGBYxED9GdU7itMvORf/LT6l3N+oPQhpjAWyzrfuAbMHiKJaduKAs
                        LcCtzQpNJWCcbCnnMnHD3Ogu5DZVdQsAAAS3SURBVPPMQoZZMkQ0Z4Tv4mdw+hdsU9FEaX9DIWm4
                        kYqncyzpG3AXyLlaQhnkUxDa6i3vIZeQTIhfX9ex7drto3dyIEeSu0cbFNog8y1Ciy45D5MDRzD4
                        x8fyfsxBTZ8M5jLWX/tm/Oxd18+rAnhOEF2DMDxoC2Rim+xLfALZSLySn/lt9rtY7DdFjpVGS3sI
                        p718eclqA/nfmUvGrGObp24+M7qpnGv17FP/vf2U0696Jzi/KVvbiLiGnlolLpwRQyRbgyhdBsN1
                        LoWCMtsThPP14HQr53yZs8x2QXiroyJqppaSo7aSF+TMUeAMKc2ZTpM65iVAJiQ0p83LsTxFNJFs
                        SYz89XakEQUABmzkwFP5I/5SGYqlElVOev9bscpFU/Axt2FlMb+l3t3wUQILV3ThpReeCEEWimr8
                        jlE/mJ2gVkJTmODAxkr68tzT393CTfOdzG2Unh7F5zifCxPGeM6ovqSD+Y/cMPu3/c8HtzPD3OKM
                        VMrxL+Q7l52aglGuU9ksPiovw7RT0bGKLCimpdh9EwHgG+s6xj+8fWw9gC2Mo0CSV5KXsOiS89C6
                        ZiX23HwnJnbsmelz7KNKUCjB4qDoeXtnbS0vv1t8wVoMPfZSbP/DY9Nu62P2EAgrWH3mUixY0g4g
                        HThSctTv+j2v7SkAG398ZnR7pf167pn/2bLmlPeOg9ItnPM24sgHcK0zlJ/MVjCqz1YutbWGCU75
                        pj//7GObM/03zS3g/HMeymzbxyCF8zV4QCY3oGhimlsbUJCs5gHMZJYW45hgJ6MtOZLVCtuQ0RI4
                        Ici84Teuax8HsOEDT46tB3ANgMu8CH7Xh8huCC9bhNM/+37EBw7j0O8exMRzu6EeH4OP+qFbEfDG
                        vkhFv/X6u9d+/u14/bN7ceTISL1Pd15DlAR0L23HgiUd6FzcASAryypKQMv++RSAzT85M7qlGv3c
                        8dz3tq455b3rwMlmcH5ZvgknvyIqHMlr+clmjmJ5E+B0M+d8819+/slx5/H+9KNrBs7beMNTXKBr
                        S5XZdszZXDCtpxdYZpy85LMcM45H046XY6Wzot0m2CmZrOYgJCchpPHtM9q3AdgGAP/65Fg/gP5i
                        DwhQEMnmuk2wfxFO+Ne3Zr4PPfhEb2zPgd7pfpdG8sjw4MTTOwcrfuKKoOWcs1aJkWBEgHVPAj1d
                        gwCqfpxK0dfX3nvpZS/vBbJW4NzP7FV7zWtf9sFQSFk53T5bW0I173dLSwg3b/l3HD5y3NP2d9zx
                        0LX5cezOaR3Tn23tkRiA3TU/AY8QRCGyaG3/KgbbhAqC4WcGtlf7OOFoKNKxsH2V0xXAM/4B5JSi
                        4CCQg3Ks/9RFu7NtKMtf4LqN1TD+07Mq1wZKYcdz3xsAsGHNKe9dxwm5hnC+AZS3gZOCiqiF/ga7
                        3RrBPwXON4PTrY/c8ZnxYsdjJttAOO+HQ8h7KadhayIDXs6JM74F4NsKylEQh7C3J+UheW2O7ca9
                        HAucb+cmv6Bwgh3uoaRFloSI19rePhoeG+Eg7ypiHYCo/fe2GvV9U43266OJccpp71sPStcTStYR
                        SqMgpJ8IdBkhxBL8hIwTSscJJdsJpdtB6bYn7v3SeL373cz4/2O2sRFt/+VsAAAAJXRFWHRkYXRl
                        OmNyZWF0ZQAyMDIyLTAxLTE5VDAyOjA0OjI2KzAwOjAw57HNwQAAACV0RVh0ZGF0ZTptb2RpZnkA
                        MjAyMi0wMS0xOVQwMjowNDoyNiswMDowMJbsdX0AAAAASUVORK5CYII=" />
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
