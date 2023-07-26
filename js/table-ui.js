let timeout = undefined;

async function fetchData(config, cb) {
  clearTimeout(timeout);


  const res =  await $.ajax({
    url:config.url,
    type:"get"
   });
  console.log(res)
  if (res[config.affect] > 0) {
    cb();
  }
  timeout = setTimeout(() => {
    fetchData(config, cb);
  }, 100);

  return Object.values(res)[0];
}




async function initializeDisplay(config) {
   const data = await fetchData(config , function (){
        initializeDisplay(config)
    })
   console.log(data)
}

async function init(config) {
  initializeDisplay(config);
}
