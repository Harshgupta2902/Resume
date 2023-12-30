<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width" />
   <title>Harsh Gupta</title>
   <link rel="icon" type="image/png" sizes="512x192" href="http://localhost/Resume/assets/logo.png" />
   <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/Resume/assets/logo.png" />
   <meta name="msapplication-TileColor" content="#0f172a" />
   <meta name="theme-color" content="#0f172a" />
   <meta name="description" content="Harsh Gupta, a Flutter developer, crafts user-centric mobile apps with a focus on accessibility and seamless experiences.." />
   <link rel="preload" href="http://localhost/Resume/assets/style.css" as="style" />
   <link rel="stylesheet" href="http://localhost/Resume/assets/style.css" data-n-g="" />
</head>

<body class="bg-slate-900 leading-relaxed text-slate-400 antialiased selection:bg-teal-300 selection:text-teal-900">

      <div class="__variable_20b187 group/spotlight relative">
         <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-20 lg:px-24 lg:py-0">
            <div class="lg:flex lg:justify-between lg:gap-4">
               <?php $this->load->view('sidebar') ?>
               <main id="content" class="pt-24 lg:w-1/2 lg:py-24">
                  <?php $this->load->view('about') ?>
                  <?php $this->load->view('experience') ?>
                  <?php $this->load->view('projects') ?>
               </main>
            </div>
         </div>
      </div>

</body>

</html>