export default function Home() {
  return (
    <div className={'grid grid-cols-1 lg:grid-cols-5 min-h-screen h-full'}>
      <img src={'/images/seafood.png'} alt={'seafood'} className={'order-2 lg:order-1 w-full h-[40vh] lg:h-full col-span-2 object-cover object-center'}/>
      <div className={'order-1 lg:order-2 col-span-3 h-full flex items-center justify-center'}>
        <div className={'px-4 pb-10 sm:pb-0'}>
          <img src={'/images/logo.svg'} alt={'logo'} className={'w-2/3 lg:w-full max-w-[400px] mx-auto mt-10'}/>
          <h1 className={'text-5xl lg:text-7xl text-center mt-10 font-asgard font-medium'}>
            {"Fresh Icelandic seafood products".split(" ").map(word => (
              <span key={word} className="block">{word}</span>
            ))}
          </h1>
          <p className={'text-center text-xl lg:text-3xl mt-24 font-mono font-medium'}>This site is under construction</p>
          <p className={'text-center text-xl lg:text-3xl mt-12 font-mono font-medium'}>Contact us at:</p>
          <p className={'flex flex-col gap-4 text-center text-xl lg:text-3xl mt-12 font-mono font-semibold'}>
            <a href={'mailto:steini@101seafood.is'} className={'text-black'}>steini@101seafood.is</a>
            <a href={'tel:+3546631678'} className={'text-black'}>+3546631678 (WhatsApp)</a>
          </p>
          <div className={'flex items-center justify-center gap-10 mt-24'}>
            <img src={'/images/MSC.png'} className={'w-48'} alt={'MSC'} />
            <img src={'/images/ASC.png'} className={'w-48'} alt={'ASC'} />
          </div>
        </div>
      </div>
    </div>
  );
}
