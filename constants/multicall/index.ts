import { ChainId } from '@aonswap/sdk'
import MULTICALL_ABI from './abi.json'

const MULTICALL_NETWORKS: { [chainId in ChainId]: string } = {
  [ChainId.MAINNET]: '0xb7998789c0098f00000ca0908b1',
}

export { MULTICALL_ABI, MULTICALL_NETWORKS }
