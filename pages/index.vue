<template>
  <main>

    <h1 class="text-2xl md:text-3xl mb-6 font-extrabold text-sky-600 transition-all">
      Lean IT Leader<br>
      Creating Business Value<br>
      Learning Never Ends.
    </h1>

    <section class="flex flex-col md:flex-row-reverse md:items-center">
      <img src="images/Headshot_3_Square.jpeg" class="w-40 h-40 rounded-full mb-4 md:mb-0 md:ml-4" />
      <div>
        <p class="text-xl mb-6">Hello! I lead IT operations and Business Systems development for a global manufacturing company based in West Michigan. My goal is to eliminate IT waste and deliver <i>real</i> business value through daily innovation, continuous improvement, and creative problem-solving.</p>
        <p class="text-xl">You can reach me at <a href="mailto:keith@brinks.me" class="font-semibold underline hover:text-sky-600">keith@brinks.me</a>, or connect with me below.</p>
      </div>
    </section>

    <section class="mt-12 grid grid-rows-2 md:grid-rows-1 sm:grid-flow-col gap-2">
      <Link href="https://facebook.com/keithbrinks" icon="fab fa-facebook-square" text="Facebook" />
      <Link href="https://instagram.com/keithbrinks" icon="fab fa-instagram" text="Instagram" />
      <Link href="https://linkedin.com/in/keithbrinks" icon="fab fa-linkedin" text="LinkedIn" />
      <Link href="https://github.com/keithbrinks" icon="fab fa-github" text="GitHub" />
      <Link href="http://steamcommunity.com/id/stargater59" icon="fab fa-steam-square" text="Steam" />
    </section>

  </main>
</template>

<script>
export default {
  name: 'IndexPage'
}
</script>
